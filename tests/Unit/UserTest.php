<?php

namespace Tests\Unit;

use App\Artist;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase {

    use DatabaseMigrations;

    /** @test */
    function artists_can_be_added_to_the_users_wishlist()
    {
        // ARRANGE
        // 2 artists
        $artist1 = factory(Artist::class)->create();
        $artist2 = factory(Artist::class)->create();
        $artist3 = factory(Artist::class)->create();

        // A user
        $user = factory(User::class)->create();

        // Add 2 artists to the users wishlist
        $user->addToWishList($artist1);
        $user->addToWishList($artist2);


        // ACT
        // Get the wishlist
        $wishlist = $user->wishlist;

        // ASSERT
        // 2 artists
        $this->assertCount(2, $wishlist);

        // Containing the correct data
        $this->assertEquals($artist1->fresh()->name, $wishlist->first()->name);
    }
}