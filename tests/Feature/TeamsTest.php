<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeamsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */ // to tell laravel that it is a test. 

    public function a_user_can_create_a_team()
      {
      
        // $this->withoutExceptionHandling();
        // Given i am a user logged in
        $this->actingAs(factory('App\User')->create());
        // when they hit the endpoint /teams with nessary data
        $attributes =  ["name" => "Acme"];
        $this->post('/teams', $attributes);//team name & team leader will be the signed in user so no need to post
        // Then there should be a new team
        $this->assertDatabaseHas('teams', ['name'=>'Acme']);
      }
    /** @test */
    public function guest_cannot_create_a_team()
      {
        // $this->withoutExceptionHandling();
        $this->post('/teams')->assertRedirect('/login');
      }
}
