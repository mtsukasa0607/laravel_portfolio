<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $this->get('/photo/photoShow')->assertOk();
        $this->get('/photo/photoFind')->assertOk();

        $this->get('/photo/photoDetail/48')->assertOk();
        // $this->get('/photo/photoAdd')->assertOk();



        // $this->get('/home')->assertOk();
        // $this->get('/photo/photoEdit/48')->assertOk();
        // $response = $this->get('/');
        // $response->assertStatus(200);
        // $this->get('/hoge')->assertStatus(404);
        // $this->get('/photo/photoShow')->assertOk();
    }

    public function testLogout(): void
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/photo/photoAdd')->assertStatus(200);

    }

}
