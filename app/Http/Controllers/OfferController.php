<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function show()
    {
        return view('offers.basic');
    }
}
