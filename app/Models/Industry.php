<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Casts\Attribute;


class Industry extends Model
{
    use HasFactory;

    public function companies(){
        return $this->belongsToMany(Company::class, 'company_industry_sector', 'industry_sector_id', 'company_id');
    }

    

    public static function getTotal(){
        return DB::table('industry_sector')->get()->count();
    }




}
