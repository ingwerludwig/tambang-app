<?php

namespace App\Models;

use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    // cause our id is UUID type, we must disable the auto incrementing from laravel
    public $incrementing = false;

    protected $fillable = [
        'id',
        'kantor',
        'kendaraan',
        'lokasi_tambang',
        'approval',
        'approval_by_admin',
        'approval_by_pengelola',
        'driver',
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
        $request['approval_by_admin'] = 0;
        $request['approval_by_pengelola'] = 0;
        $request['status'] = 'WAITING_APPROVAL';
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        return $request;
    }
}
