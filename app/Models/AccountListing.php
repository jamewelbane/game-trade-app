<?php

namespace App\Models;

use App\Models\AccountListingImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id', 
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

    public function images()
    {
        return $this->hasMany(AccountListingImage::class, 'listing_id', 'listing_id');
    }
}
