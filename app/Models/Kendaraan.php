<?php

namespace App\Models;

use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';

    // cause our id is UUID type, we must disable the auto incrementing from laravel
    public $incrementing = false;

    protected $fillable = [
        'id',
        'id_jenis_kendaraan',
        'bbm_spent',
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
        $request['bbm_spent'] = 0;
        $request['status'] = 'ACTIVE';
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        return $request;
    }
}
