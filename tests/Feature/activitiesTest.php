<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\activity;
use Tests\TestCase;

class activitiesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testactivity()
    {
        // Crear un usuario para la autenticación
        $user = User::factory()->create();

        // Autenticar al usuario
        $this->actingAs($user);

        // Realizar la solicitud a la ruta protegida
        $response = $this->get(route('activity'));

        // Verificar que el código de estado sea 302
        $response->assertStatus(302);
    }
    /** @test */
    public function CrearActivity()
    {
        $registerstand=$this->post(('activity'),['name'=>"fiestas patrias",'description'=>"decoracion",'datetime'=>"15/07/2024",'status'=>"Obligatorio"]);
        $registerstand->assertStatus(302);
       
    }
}
