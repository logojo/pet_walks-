<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetWalksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pet_walks')->insert( array (
            0 => array( 
                'id' => 1,
                'location' => 'el parque',
                'walk_date' => Carbon::createFromFormat('d/m/Y','14/02/2024'),
                'pet_id' => 1
            ),            
           ));
    }
}
