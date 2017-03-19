<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add(Artist $artist)
    {
        if (request()->json()) {

            if (auth()->user()->addToWishlist($artist)) {

                return response()->json(['new_artist' => $artist->id], 201);
            }

            return response(['new_artist' => null], 400);
        }
    }
}
