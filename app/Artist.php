<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $appends = ['in_wishlist'];

    public function getInWishlistAttribute()
    {
        if (auth()->user()) {

            return auth()->user()->wishlist->contains('id', $this->id);
        }
    }

}
