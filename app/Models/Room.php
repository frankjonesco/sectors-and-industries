<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function chores(){

        return $this->hasManyThrough(
            Chore::class,
            Map::class,
            'room_id', // Foreign key on the Maps table...
            'id', // Foreign key on the Chores table...
            null,
            'chore_id'
        );
    }
}
