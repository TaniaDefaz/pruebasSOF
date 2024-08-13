<?php
use Tests\TestCase;
use App\Models\User;

class DatabaseQueryIntegrationTest extends TestCase
{
    public function testDatabaseQueryIntegration()
    {
        // Simula la creación de un usuario de prueba
        $user = User::factory()->create(['name' => 'Test User']);
        
        // Verifica que la consulta desde el controlador retorne los datos correctos
        $response = $this->get('/users/' . $user->id);
        $response->assertStatus(200);
        
        // Verifica que la vista cargue los datos correctos del usuario
        $response->assertViewHas('user', $user);

        // Simula una consulta con un ID inexistente
        $response = $this->get('/users/999999');
        $response->assertStatus(404); // Verifica que el sistema maneje el error adecuadamente
    }
}
