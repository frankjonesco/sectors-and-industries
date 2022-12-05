<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // Relationship to chores
    public function chores(){
        return $this->belongsToMany(
            Chore::class,
            'maps'
        )->withPivot('id', 'room_id', 'chore_id', 'person_id');
    }
}
