<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Profile;

class profileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteProfile()
    {
        $profile = new Profile();
        //$user->name = 'Mrs. Emilia Rose';
        $profile->user_id = '27';
        $profile->fname = 'Robert';
        $profile->lname = 'Jones';
        $profile->body = 'Grant Avenue';
        $profile->save();
        $this->assertTrue($profile->delete());
    }

    public function testInsertProfile()
    {
        $profile = new Profile();
        //$user->name = 'Mrs. Emilia Rose';
        $profile->user_id = '27';
        $profile->fname = 'James';
        $profile->lname = 'Patrick';
        $profile->body = 'Living in Journal Square';
        $profile->save();
        $this->assertTrue($profile->save());
    }
}
