<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = factory(\App\User::class)->make();

        $this->assertTrue($user->save());
    }

    public function testQuestions()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->questions()->get()));
    }
    public function testAnswers()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->answers()->get()));
    }
    public function testProfile()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->profile()->get()));
    }
    public function testDeleteUser()
    {
        $user = new User();
        //$user->name = 'Mrs. Emilia Rose';
        $user->email = 'joey.bloom@gmail.com';
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->role = 'admin';
        $user->save();
        $this->assertTrue($user->delete());
    }

    public function testInsertUser()
    {
        $user = new User
        ();

        $user->email = 'Adele@gmail.com';
        $user->password = 'theflash';
        $user->role = 'tutor';
        $this->assertTrue($user->save());
    }
}
