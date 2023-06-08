<?php

namespace App\Models;

use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoryService extends Model
{
    use HasFactory;

    protected $table = 'history_service';

    // cause our id is UUID type, we must disable the auto incrementing from laravel
    public $incrementing = false;

    protected $fillable = [
        'id',
        'id_kendaraan',
        'alamat_service',
        'tanggal_masuk',
        'tanggal_selesai',
        'deskripsi_keluhan',
        'diagnosis_kerusakan',
        'biaya',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Fill & hash the missing pieces of users input
     *
     * @return array
     */
    public static function addAdditionalData(Array $request): Array
    {
        $request['id'] = Uuid::generate()->string;
        $request['tanggal_masuk'] = Carbon::createFromFormat('d-m-y H:i:s', $request['tanggal_masuk']);
        $request['status'] = 'SERVICE_PROCESSED';
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        return $request;
    }
}