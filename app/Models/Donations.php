<?php

namespace App\Models;
use App\Models\Category;
use App\Models\DonationImages;
//use App\Models\MarketImages;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model {

//    public function leasingrepsone() {
//        return $this->hasOne(LeasingReps::class, 'id');
//    }
//    
     public function donationimage() {
        return $this->hasMany(DonationImages::class, 'donation_id', 'id');
    }
    
     public function category() {
        return $this->hasOne(Category::class,'id','category_id');
    }

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