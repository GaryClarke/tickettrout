<?php

namespace Tests;

use App\User;
use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Disable exception handling for testing purposes
     */
    public function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class extends Handler {

            public function __construct() {}

            public function report(\Exception $exception) {}

            public function render($request, \Exception $exception)
            {
                throw $exception;
            }
        });
    }


    /**
     * Sign in a user
     *
     * @param null $user
     * @return $this
     */
    public function signIn($user = null)
    {
        if (! $user) {

            $user = factory(User::class)->create();
        }

        $this->user = $user;

        $this->actingAs($this->user);

        return $this;
    }
}
