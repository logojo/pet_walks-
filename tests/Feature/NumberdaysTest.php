<?php

namespace Tests\Feature;

use App\Models\Mascota;
use App\Models\PetWalk;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NumberdaysTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function can_calculate_number_of_days_old(): void
    {
        $mascota = Mascota::create([
           'name' => 'Frodo',
            'description' => 'Central Asian Shepherd Dog',
            'type' => 'Dog',
            'birthday' => Carbon::createFromFormat('Y/m/d','2024/02/01'),
            // otros campos necesarios para el modelo
        ]);

        $mascota = PetWalk::create([
             'location' => 'Parque',
             'walk_date' => Carbon::createFromFormat('Y/m/d','2024/20/08'),
             'pet_id' => $mascota->id
             // otros campos necesarios para el modelo
         ]);

         $dias = Mascota::getDays($mascota);
         $total = Carbon::parse($mascota->birthday)->diffInDays($mascota->petWalk->walk_date);
 
         $this->assertEquals($total, $dias);
    }
}
