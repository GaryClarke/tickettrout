<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Users full name
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }


    /**************************************** Wishlist ****************************************/

    public function wishlist()
    {
        return $this->belongsToMany(Artist::class);
    }


    public function addToWishlist(Artist $artist)
    {
        try {

            $this->wishlist()->attach($artist->id);

            return true;

        } catch (\Exception $exception)
        {
            return false;
        }
    }
}
