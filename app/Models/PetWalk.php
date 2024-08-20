<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetWalk extends Model
{
    protected $table = 'pet_walks';
    protected $fillable = ['location', 'walk_date','pet_id'];

    public function mascota() {
        return $this->belongsTo(Mascota::class, 'pet_id');
    }
}
