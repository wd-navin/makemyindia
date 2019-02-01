<?php

namespace App\Models;

//use App\Models\LeasingReps;
//use App\Models\MarketImages;
use Illuminate\Database\Eloquent\Model;

class Users extends Model {

//    public function leasingrepsone() {
//        return $this->hasOne(LeasingReps::class, 'id');
//    }
//    
//     public function marketimages() {
//        return $this->hasMany(MarketImages::class, 'market_id', 'id');
//    }

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