<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';
    protected $fillable = ['name', 'description','type','birthday'];

    public function petWalk() {
        return $this->hasOne(PetWalk::class, 'pet_id');
    }

    public static function getDays(Mascota $mascota ) {

        $fecha = Carbon::parse($mascota->birthday);

        $exist = PetWalk::where('pet_id', $mascota->id)->first();

        if( $exist )
             return $fecha->diffInDays($mascota->petWalk->walk_date);

        return 'No se puede realizar calculo';

    }
}
