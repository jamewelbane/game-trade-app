<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountListingDropdownController extends Controller
{
    public function createAccountListing()
    {
        $games = DB::table('games')->pluck('name', 'id');
        $account_uses = DB::table('account_uses')->pluck('name', 'id');
        $accountTypes = DB::table('account_types')->pluck('name', 'id');
        $platforms = DB::table('platforms')->pluck('name', 'id');

        return view('admin.pages.CreateAccountListing', compact('games', 'account_uses', 'accountTypes', 'platforms'));
    }
}
