<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingImage extends Model
{
    use HasFactory;

    protected $fillable = ['listing_id', 'image_path'];

   // ListingImage.php
public function listing()
{
    return $this->belongsTo(AccountListing::class, 'listing_id'); // Correctly reference 'listing_id'
}

}
