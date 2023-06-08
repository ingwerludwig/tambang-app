<?php

namespace App\Http\Controllers;

use App\Services\ExportData;
use Illuminate\Http\Request;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;

class ExportDataController extends Controller
{
    public function exportData()
    {
        $exportData = new ExportData();

        $filePath = storage_path('app/data.xlsx');

        $writer = WriterEntityFactory::createXLSXWriter();
        $writer->openToFile($filePath);

        // Add header row with styles
        $headerStyle = (new StyleBuilder())
            ->setFontBold()
            ->setFontSize(12)
            ->setBackgroundColor('000000')
            ->setFontColor('FFFFFF')
            ->build();

        $headerRow = WriterEntityFactory::createRowFromArray([
            'ID',
            'Kantor',
            'Kendaraan',
            'Lokasi Tambang',
            'Approval',
            'Approval by Admin',
            'Approval by Pengelola',
            'Driver',
            'Biaya',
            'Status',
            'Created At',
            'Updated At'
        ]);
        $headerRow->setStyle($headerStyle);
        $writer->addRow($headerRow);

        // Add data rows
        $data = $exportData->query();
        foreach ($data as $row) {
            $dataRow = WriterEntityFactory::createRowFromArray([
                $row->id,
                $row->kantor,
                $row->kendaraan,
                $row->lokasi_tambang,
                $row->approval,
                $row->approval_by_admin,
                $row->approval_by_pengelola,
                $row->driver,
                $row->biaya,
                $row->status,
                $row->created_at,
                $row->updated_at
            ]);
            $writer->addRow($dataRow);
        }

        $writer->close();

        return response()->download($filePath)->deleteFileAfterSend();
    }
}
