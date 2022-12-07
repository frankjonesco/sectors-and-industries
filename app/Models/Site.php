<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    // Get database tables
    public static function tables(){
        $tables = [
            'rooms' => Room::get(),
            'chores' => Chore::get(),
            'persons' => Person::get(),
            'maps' => Map::get()
        ];
        return collect($tables);
    }

}
