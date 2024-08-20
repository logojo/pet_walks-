<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotasSeeder extends Seeder
{
    
    public function run(): void
    {
       DB::table('mascotas')->insert( array (
        0 => array( 
            'id' => 1,
            'name' => 'Perro firulais',
            'description' => 'Un perro muy amigable',
            'type' => 'Dog',
            'birthday' => Carbon::createFromFormat('d/m/Y', '01/01/2022')
        ),
        1 => array( 
            'id' => 2,
            'name' => 'tortuga mordelona',
            'description' => 'Una tortuga muy bonita',
            'type' => 'Turtle',
            'birthday' => Carbon::createFromFormat('d/m/Y', '03/05/2020')
        ),
        2 => array( 
            'id' => 3,
            'name' => 'Car correlon',
            'description' => 'UN carro correlon',
            'type' => 'Car',
            'birthday' => Carbon::createFromFormat('d/m/Y', '05/09/1999')
        ),
       ));
    }
}
