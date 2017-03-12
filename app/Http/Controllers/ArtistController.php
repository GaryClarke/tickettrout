<?php

namespace App\Http\Controllers;

use App\Artist;


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

            return response()->json($artists, 200);
        }

        abort(403, 'No way José');
    }
}
