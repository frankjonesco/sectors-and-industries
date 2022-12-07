<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    // ACCESSORS

    /**
     * Get the room's labelled chore count.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    protected function labelledChoreCount(): Attribute
    {
        $count = count($this->grouped_chores);
        $label = ($count === 1 ? 'chore' : 'chores');

        return Attribute::make(
            get: fn ($value) => $count.' '.$label,
        );
    }

    /**
     * Get the room's labelled person count.
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
}
