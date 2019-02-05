<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersImages extends Model {



    protected $fillable = [
        'user_id',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'users_image';

}