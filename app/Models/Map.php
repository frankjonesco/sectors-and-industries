<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    // Relationship to room
    public function room(){
        return $this->hasOneThrough(Room::class, Map::class, 'id', 'id', 'room_id', 'id');
    }

    // Relationship to chore
    public function chore(){
        return $this->belongsToMany(Chore::class, 'maps', 'id')->withPivot('id', 'room_id', 'chore_id', 'person_id');
    }

}
