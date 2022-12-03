<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sector extends Model
{
    use HasFactory;

    public function industries(){
        // return $this->hasManyThrough(Industry::class, SectorMap::class, 'industry_id', 'idp');
        return $this->hasMany(SectorMap::class, 'sector_id')->select('*')->leftjoin('industries','industries.id','=','sector_maps.industry_id');
    }

    public function companies(){
        return $this->hasManyThrough(Company::class, IndustrySector::class);
    }



    public function getIndustries(){

    }



    // protected function companies(): Attribute
    // {   
    //     $company_ids = [];
    //     $industries = DB::table('industry_sector')->where('sector_id', $this->id)->get();
    //     foreach($industries as $industry){
    //         $company_ids[] = DB::table('company_industry')->where('industry_id', $industry->id)->first()->company_id;
    //     }

    //     return new Attribute(
    //         get: fn ($value, $attributes) => DB::table('companies')->whereIn('id', $company_ids)->get()
    //     );
    // }


    // protected function industries(): Attribute
    // {   
        
    //     $industry_ids = [];
    //     $industries = DB::table('industry_sector')->where('sector_id', $this->id)->get();
    //     foreach($industries as $industry){
    //         $industry_ids[] = $industry->id;
    //     }

    //     return new Attribute(
    //         get: fn ($value, $attributes) => DB::table('industry_sector')->whereIn('id', $industry_ids)->get()
    //     );
    // }



    
    
}
