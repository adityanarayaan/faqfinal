<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use App\Http\Middleware\TeacherMiddleware;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class AdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function non_admins_are_redirected()
    {
        $user = factory(User::class)->make(['Admin' => false]);

        $this->actingAs($user);

        $request = Request::create('/admin', 'GET');

        $middleware = new AdminMiddleware;

        $response = $middleware->handle($request, function () {});

        $this->assertEquals($response->getStatusCode(), 302);
    }


    /** @test */
    public function admins_are_not_redirected()
    {
        $user = factory(User::class)->make(['Admin' => true]);

        $this->actingAs($user);

        $request = Request::create('/admin', 'GET');

        $middleware = new AdminMiddleware;

        $response = $middleware->handle($request, function () {});

        $this->assertEquals($response, null);
    }
}
