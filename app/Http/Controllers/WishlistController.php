<?php

namespace App\Http\Controllers;

use App\Artist;

class WishlistController extends Controller
{

    /**
     * Add an artist to the wishlist
     *
     * @param Artist $artist
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function add(Artist $artist)
    {
        if (request()->json()) {

            if (auth()->user()->addToWishlist($artist)) {

                return response()->json(['new_artist' => $artist], 201);
            }

            return response(['new_artist' => null], 400);
        }

        abort(403, 'Sorry, not sorry');
    }


    /**
     * Remove an artist from the wishlist
     *
     * @param Artist $artist
     * @return \Illuminate\Contracts\Routing\ResponseFactory
     */
    public function remove(Artist $artist)
    {
        if (request()->json()) {

            if (auth()->user()->removeFromWishlist($artist)) {

                return response()->json(['removed' => $artist], 202);
            }

            return response(['removed' => null], 400);
        }

        abort(403, 'Sorry, not sorry');
    }
}
