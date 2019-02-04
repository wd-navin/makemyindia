<?php

namespace App\Models;

//use App\Models\LeasingReps;
//use App\Models\MarketImages;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model {

//    public function leasingrepsone() {
//        return $this->hasOne(LeasingReps::class, 'id');
//    }
//    
//     public function marketimages() {
//        return $this->hasMany(MarketImages::class, 'market_id', 'id');
//    }

    protected $fillable = [
        'user_id',
        'donation_type_id',
        'city',
        'state',
        'pick_up_location',
//        'lat',
//        'lng',
        'message',
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'donation';

}