<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClienteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_se_puede_crear_un_cliente()
{
    $response = $this->post('/clientes', [
        'nombre' => 'Juan Pérez',
        'email' => 'juan@gmail.com',
        'telefono' => '999888777',
    ]);

    $response->assertStatus(302);
    $this->assertDatabaseHas('clientes', [
        'email' => 'juan@gmail.com'
    ]);
}

}
