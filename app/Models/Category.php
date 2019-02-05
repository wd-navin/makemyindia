<?php

namespace App\Models;

//use App\Models\DonationImages;
//use App\Models\MarketImages;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {

//    public function leasingrepsone() {
//        return $this->hasOne(LeasingReps::class, 'id');
//    }
//    
//     public function donationimage() {
//        return $this->hasMany(DonationImages::class, 'donation_id', 'id');
//    }

    protected $fillable = [
        'name',      
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'category';

}