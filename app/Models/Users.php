<?php

namespace App\Models;

use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    // cause our id is UUID type, we must disable the auto incrementing from laravel
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nama',
        'password',
        'role',
        'created_at',
        'updated_at'
    ];

     /**
     * Fill & hash the missing pieces of users input
     *
     * @return array
     */
    public static function addAdditionalData(Array $request): Array
    {
        $request['id'] = Str::uuid()->toString();
        $request['password'] = Hash::make($request['password']);
        $request['created_at'] = Carbon::now();
        $request['updated_at'] = Carbon::now();

        return $request;
    }
}
