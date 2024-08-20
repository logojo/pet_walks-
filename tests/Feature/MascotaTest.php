<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MascotaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function was_frodo_created(): void
    {
        $response = $this->post('/mascotas', [
            'name' => 'Frodo',
            'description' => 'Central Asian Shepherd Dog',
            'type' => 'Dog',
            'birthday' => Carbon::createFromFormat('Y/m/d','2024/02/01'),

        ]);

        $response->assertRedirect('/mascotas');
        $this->assertDatabaseHas('mascotas', [
            'name' => 'Frodo',
            'description' => 'Central Asian Shepherd Dog',
            'type' => 'Dog',
            'birthday' => Carbon::createFromFormat('Y/m/d','2024/02/01'),
        ]);

    }
}
