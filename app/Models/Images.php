<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {



    protected $fillable = [
        'image',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'images';

}