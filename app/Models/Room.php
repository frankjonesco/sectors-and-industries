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

    // Relationship to chores (grouped)
    public function grouped_chores(){
        return $this->belongsToMany(
            Chore::class,
            'maps'
        )->distinct();
    }

    // Relationship to persons with pivot (ungrouped)
    public function persons(){
        return $this->belongsToMany(
            Person::class,
            'maps'
        )->withPivot('id', 'room_id', 'chore_id', 'person_id');
    }

    // Relationship to persons (grouped)
    public function grouped_persons(){
        return $this->belongsToMany(
            Person::class,
            'maps'
        )->distinct();
    }
}
