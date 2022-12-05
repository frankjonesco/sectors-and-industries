<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // Relationship: room to chores
    public function chores(){
        return $this->belongsToMany(
            Chore::class,
            'maps'
        )
        ->withPivot('id', 'room_id', 'chore_id', 'person_id');
    }

    public function chore_types(){
        return $this->belongsToMany(
            Chore::class,
            'maps'
        )->distinct();
    }

    // Relationship: room to persons
    public function persons(){
        return $this->belongsToMany(
            Person::class,
            'maps'
        )
        ->withPivot('id', 'room_id', 'chore_id', 'person_id');
    }
}
