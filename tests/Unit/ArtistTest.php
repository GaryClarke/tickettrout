<?php

namespace Tests\Unit;

use App\Artist;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ArtistTest extends TestCase {

    use DatabaseMigrations;

    /** @test */
    function in_wishlist_boolean_can_be_appended_for_auth_user()
    {
        // ARRANGE
        // Signed in user
        $this->signIn();

        // An artist
        $artist = factory(Artist::class)->create();

        $this->user->addToWishlist($artist);

        // ASSERT
        $this->assertTrue($artist->inWishlist);
    }

}