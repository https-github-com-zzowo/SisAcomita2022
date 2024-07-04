<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\partner;
use Tests\TestCase;

class partnersTest extends TestCase
{
    /**
     * A basic feature test example.
     *   
     * @return void
     */
    public function testPartners()
    {
        // Crear un usuario para la autenticación
        $user = User::factory()->create();

        // Autenticar al usuario
        $this->actingAs($user);

        // Realizar la solicitud a la ruta protegida
        $response = $this->get(route('partner'));

        // Verificar que el código de estado sea 302
        $response->assertStatus(302);
    }
     /** @test */
    public function CrearPartners()
    {
        $registerstand=$this->post(('partner'),['name'=>"jose",'lastname'=>"coa",'dni'=>"74523651",'phone'=>"914253625",'birthdate'=>"21/2/2024",'email'=>"example@gmail.com",'addres'=>"jr tumbres"]);
        $registerstand->assertStatus(302);
       
    }
}
