<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
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
