<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemListingDropdownController extends Controller
{
    public function createItemListing()
    {
        $games = DB::table('games')->pluck('name', 'id');
        
        $itemTypes = DB::table('item_types')->pluck('name', 'id');

        return view('admin.pages.CreateItemListing', compact('games', 'itemTypes'));
    }
}
