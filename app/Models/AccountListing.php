<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'game',
        'usage',
        'type',
        'platform',
        'user_id',
    ];


   // AccountListing.php
public function images()
{
    return $this->hasMany(ListingImage::class, 'listing_id'); // Correctly reference 'listing_id'
}


}
