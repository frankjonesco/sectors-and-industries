<?php

use App\Models\Sector;
use App\Models\Company;
use App\Models\Industry;
  
  
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('totalCounts')) {
    function totalCounts()
    {
        return [
            'sectors' => Sector::count(),
            'industries' => Industry::getTotal(),
            'companies' => Company::count()
        ];
    }
}
