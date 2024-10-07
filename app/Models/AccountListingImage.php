<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountListingImage extends Model
{
    use HasFactory;

    protected $fillable = ['listing_id', 'image_path'];


    public function listing()
    {
        return $this->belongsTo(AccountListing::class, 'listing_id'); // Correctly reference 'listing_id'
    }
}
