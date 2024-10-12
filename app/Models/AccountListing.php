<?php

namespace App\Models;

use App\Models\AccountListingImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'negotiable',
        'game',
        'usage',
        'type',
        'platform',
        'user_id',
    ];


   // AccountListing.php
public function images()
{
    return $this->hasMany(AccountListingImage::class, 'listing_id'); // Correctly reference 'listing_id'
}


}
