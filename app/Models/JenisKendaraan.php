<?php

namespace App\Models;

use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisKendaraan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kendaraan';

    protected $fillable = [
        'id',
        'jenis',
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
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        return $request;
    }
}
