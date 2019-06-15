<?php

namespace Tests;
namespace Tests\Unit;
namespace Tests\Traits;

use Auth;
use App\User;
use Tests\TestCase;
use Tests\Traits\AuthTestAttachesJWT;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTestHelper extends TestCase
{
    use AuthTestAttachesJWT;

    const API_BASE_URL = 'api/';

    public function setUp()
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->artisan('db:seed');
    }

    /**
     * Get the api URL, including the api base, and the
     * administator's api token
     * @param  string $url - unique api url, like /saccos/1
     * @return the full api url
     */
    public function apiUrl(string $url){
        return  self::API_BASE_URL.
                    $url.
                    '?api_token='.
                    Auth::user()->api_token;
    }

    /**
     * Wrapper for the get() test method
     *
     * Accepts the main api path and sends a get request to it
     *
     * @param  string $url the url
     * @return $this for chaining
     */
    public function getApiUrl(string $url){
        return $this->get($this->apiUrl($url));
    }

    /**
     * Reset Migrations
     *
     * @return void
     */
    public function tearDown()
    {
        $this->artisan('migrate:reset');
    }
}
