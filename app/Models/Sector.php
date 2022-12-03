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
        return $this->belongsToMany(Industry::class)->withPivot(['id', 'hex']);
    }

    public function companies(){
        return $this->belongsToMany(Company::class, 'company_industry_sector', 'industry_sector_id', 'company_id');
    }



    public function getTest(){

        // $industries = DB::table('salaries')
        // ->selectRaw('companies.name as company_name, avg(salary) as avg_salary, count(*) as people_count')
        // ->join('companies', 'salaries.company_id', '=', 'companies.id')
        // ->groupBy('companies.id')
        // ->orderByDesc('avg_salary')
        // ->get();

        $industries = DB::table('industry_sector')
        

        ->get();


        return $industries;
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
