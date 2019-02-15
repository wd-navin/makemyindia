<?php

namespace App\Models;

use App\Models\UsersImages;
use App\Models\Images;
//use App\Models\MarketImages;
use Illuminate\Database\Eloquent\Model;

class Users extends Model {

    public function userimage() {
        return $this->hasOne(UsersImages::class, 'user_id', 'id');
    }
    
     public function images() {
        return $this->hasMany(Images::class, 'user_id', 'id');
    }

    protected $fillable = [
        'name',
        'username',
        'phone',
        'fax',
        'email',
        'password',
        'status',
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'users';

}