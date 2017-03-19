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
        $this->disableExceptionHandling();

        // ARRANGE
        // A signed in user
        $this->signIn();

        // And an artist
        $artist = factory(Artist::class)->create();

        // ACT
        // Hit the add artist to wishlist route
        $response = $this->json('GET', "/artists/{$artist->id}/add");

        // ASSERT
        // Added artist id is returned
        $response->assertJson([
           'new_artist' => $artist->id
        ]);

        // 201 response
        $response->assertStatus(201);
    }
}