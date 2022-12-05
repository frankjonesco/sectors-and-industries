<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
