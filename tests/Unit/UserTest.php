<?php

namespace Tests\Unit;

use App\User;
use Tests\Unit\ApiTestHelper;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

/**
 * Class UserTest
 */
class UserTest extends ApiTestHelper
{

    /**
     * Test request to get all users
     *
     * @return void
     */
    public function testCanGetAllUsers()
    {
        $this->json('GET', '/users')->seeStatusCode(200);
    }

    /**
     * Test fake generates users to get 10 users
     *
     * @return void
     */
    public function testcreatesAtAtleastFiveFakeUsers() {
        $users = factory(Users::class, mt_rand(5, 15))->create();

        $user_count = count($users) >= 5;

        $this->assertTrue($user_count);
    }

    /**
     * Test request to get 10 users
     *
     * @return void
     */
    public function testhasTenUsers()
    {
        $users = factory(User::class, 10)->make();
        
        $this->assertEquals(10, $users->count());
    }

    /**
     * Test that name field is required
     *
     * @return void
     */
    public function testauthenticatedUserCanLogin()
    {
        
    }

    /**
     * Test that user cannot login without tokens
     *
     * @return void
     */
    public function testunAuthenticatedUserCannotLoginWithoutTokens()
    {
        
    }
    
}
