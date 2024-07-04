<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Stand;
use Illuminate\Http\Response;

class standsTest extends TestCase
{
    use RefreshDatabase;

    public function testStand()
    {
        // Crear un usuario para la autenticación
        $user = User::factory()->create();

        // Autenticar al usuario
        $this->actingAs($user);

        // Realizar la solicitud a la ruta protegida
        $response = $this->get(route('stand'));

        // Verificar que el código de estado sea 302
        $response->assertStatus(302);
    }


    /** @test */
    public function CrearStand()
    {
        $registerstand=$this->post(('stand'),['name'=>"A1",'status'=>"alquilado"]);
        $registerstand->assertStatus(302);
       
    }
    /** @test */
 //   public function deleteStand()
//    {
   //     $stand = Stand::factory()->create();

   //     $response = $this->delete(route('stand.delete', $stand->id));

   //     $response->assertStatus(302);
   //     $this->assertDatabaseMissing('stands', ['id' => $stand->id]);
   /// }

       /** @test */
   // public function updateStand()
  ///  {
  //      $stand = Stand::factory()->create();

  //      $response = $this->put(route('stand.update', $stand->id), ['name' => 'Updated Name', 'status' => 'Updated Status']);

 //       $response->assertStatus(302);
   //     $this->assertDatabaseHas('stands', ['id' => $stand->id, 'name' => 'Updated Name', 'status' => 'Updated Status']);
   // }
}

    



