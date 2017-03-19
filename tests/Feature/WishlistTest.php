<?php

namespace Tests\Feature;

use App\Artist;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class WishlistTest extends TestCase {

    use DatabaseMigrations;

    /** @test */
    function a_user_can_add_artists_to_their_wishlist()
    {
        // ARRANGE
        // A signed in user
        $this->signIn();

        // And an artist
        $artist = factory(Artist::class)->create();

        // ACT
        // Hit the add artist to wishlist route
        $response = $this->json('PUT', "/wishlist/{$artist->id}");

        // ASSERT
        // Added artist id is returned
        $response->assertJson([
           'new_artist' => $artist->id
        ]);

        // 201 response
        $response->assertStatus(201);

        // Artist added to wishlist
        $this->assertTrue($this->user->wishlist->contains('id', $artist->id));
    }


    /** @test */
    function a_user_can_remove_artists_from_their_wishlist()
    {
        // ARRANGE
        // A signed in user
        $this->signIn();

        // An artist
        $artist = factory(Artist::class)->create();

        // Add the artist to the users wishlist
        $this->user->addToWishlist($artist);

        // Interim check
        $this->assertTrue($this->user->fresh()->wishlist->contains('id', $artist->id));

        // ACT
        // Hit the remove artist from from wishlist route
        $response = $this->deleteJson("/wishlist/{$artist->id}");

        // ASSERT
        // Added artist id is returned
        $response->assertJson([
            'removed' => $artist->id
        ]);

        // 202 response
        $response->assertStatus(202);

        // Artist removed from wishlist
        $this->assertFalse($this->user->fresh()->wishlist->contains('id', $artist->id));
    }
}