<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateContact()
    {
        $data = [
            'name' => 'Miguel Leite',
            'contact' => '941398739',
            'email' => 'miguelleite@gmail.com',
        ];
        $response = $this->post('/api/adicionar', $data);

        $response->assertStatus(201);
    }

    public function testUpdateContact()
    {
        $data = [
            'name' => 'Miguel Pascoal Leite',
        ];
        $response = $this->put('/api/actualizar/26', $data);

        $response->assertStatus(200);
    }

    public function testDeleteContact()
    {
        $response = $this->delete('/api/remover/26');

        $response->assertStatus(200);
    }
}
