<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chore extends Model
{
    use HasFactory;

    // Relationship to map
    public function map(){
        return $this->belongsTo(Map::class);
    }

    // // Relationship to this chore's room
    // public function room(){
    //     return $this->belongsToMany(
    //         Room::class,
    //         'maps'
    //     )->withPivot('id', 'room_id', 'chore_id', 'person_id')
    //     ->wherePivot('room_id', $this->pivot->room_id);
    // }

    // Relationship to rooms (grouped)
    public function grouped_rooms(){
        return $this->belongsToMany(
            Room::class,
            'maps'
        )->distinct();
    }

    // Relationship to persons with pivot (ungrouped)
    public function persons(){
        return $this->belongsToMany(
            Person::class,
            'maps'
        )->withPivot('id', 'room_id', 'chore_id', 'person_id')
        ->wherePivot('room_id', $this->pivot->room_id);
    }
    
    // Relationship to persons (grouped)
    public function grouped_persons(){
        return $this->belongsToMany(
            Person::class,
            'maps'
        )->distinct();
    }


    // ACCESSORS

    /**
     * Get the chore's labelled room count.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    protected function labelledRoomCount(): Attribute
    {
        $count = count($this->grouped_rooms);
        $label = ($count === 1 ? 'room' : 'rooms');

        return Attribute::make(
            get: fn ($value) => $count.' '.$label,
        );
    }

    /**
     * Get the chore's labelled person count.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    protected function labelledPersonCount(): Attribute
    {
        $count = count($this->grouped_persons);
        $label = ($count === 1 ? 'person' : 'people');

        return Attribute::make(
            get: fn ($value) => $count.' '.$label,
        );
    }

    /**
     * Get the room's chore persons labelled count.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    protected function labelledRoomChorePersonCount(): Attribute
    {
        $count = count($this->persons);
        $label = ($count === 1 ? 'person' : 'people');

        return Attribute::make(
            get: fn ($value) => $count.' '.$label,
        );
    }

}
