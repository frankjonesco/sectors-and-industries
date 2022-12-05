<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chore extends Model
{
    use HasFactory;

    // Relationship to map
    public function map(){
        return $this->belongsTo(Map::class);
    }


    // Relationship to persons
    public function persons(){
        return $this->belongsToMany(
            Person::class,
            'maps'
        )->withPivot('id', 'room_id', 'chore_id', 'person_id')->wherePivot('room_id', $this->pivot->room_id);
    }
}
