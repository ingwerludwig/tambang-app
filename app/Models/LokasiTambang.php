<?php

namespace App\Models;

use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LokasiTambang extends Model
{
    use HasFactory;

    protected $table = 'lokasi_tambang';

    // cause our id is UUID type, we must disable the auto incrementing from laravel
    public $incrementing = false;

    protected $fillable = [
        'id',
        'alamat',
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
        $request['status'] = 'ACTIVE';
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        return $request;
    }
}
