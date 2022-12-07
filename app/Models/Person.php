<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    // Relationship to rooms (grouped)
    public function grouped_rooms(){
        return $this->belongsToMany(
            Room::class,
            'maps'
        )->distinct();
    }

    // Relationship to chores (grouped)
    public function grouped_chores(){
        return $this->belongsToMany(
            Chore::class,
            'maps'
        )->distinct();
    }

    // Relationship to chore rooms (grouped)
    public function grouped_chore_rooms(){
        return $this->belongsToMany(
            Room::class,
            'maps'
        )->wherePivot('chore_id', $this->pivot->chore_id)
        ->distinct();
    }

    
    // ACCESSORS

    /**
     * Get the chore's labelled room count.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    protected function labelledChoreRoomCount(): Attribute
    {
        $count = count($this->grouped_chore_rooms);
        $label = ($count === 1 ? 'room' : 'rooms');

        return Attribute::make(
            get: fn ($value) => $count.' '.$label,
        );
    }
}
