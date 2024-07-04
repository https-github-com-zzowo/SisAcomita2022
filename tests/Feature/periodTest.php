<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Period;
use Tests\TestCase;

class periodTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPeriod()
    {
                // Crear un usuario para la autenticación
                $user = User::factory()->create();

                // Autenticar al usuario
                $this->actingAs($user);
        
                // Realizar la solicitud a la ruta protegida
                $response = $this->get(route('period'));
        
                // Verificar que el código de estado sea 302
                $response->assertStatus(302);
    }
    /** @test */
    public function CrearPeriod()
    {
        $registerstand=$this->post(('period'),['name'=>"2024-1",'dateinit'=>"02/07/2024",'dateout'=>"03/07/2024",'status'=>"0"]);
        $registerstand->assertStatus(302);
       
    }
}
