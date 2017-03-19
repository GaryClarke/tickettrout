<?php

namespace App\Http\Controllers;

use App\Artist;
use App\User;


class ArtistController extends Controller {

    public function index()
    {
        return view('artists.index');
    }

    public function show(Artist $artist)
    {
        return view('artists.artist', compact('artist'));
    }


    public function fetchArtists()
    {
        if (request()->json())
        {
            $artists = Artist::orderBy('name', 'asc')->get();

//            $wishlist = auth()->user()->wishlist->pluck('id');

            $wishlist = [1, 2];

            return response()->json(['artists' => $artists, 'wishlist' => $wishlist], 200);
        }

        abort(403, 'No way José');
    }
}
