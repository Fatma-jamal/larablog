<?php

namespace App\Services;

use App\Models\Rate;

class RateService
{
    public function store(array $rateData): Rate
    {
        $rate = Rate::create($rateData);
 
        $rate->roles()->sync($rateData['roles']);
 
        // More actions with that user: let's say, 5+ more lines of code
        // - Upload avatar
        // - Email to the user
        // - Notify admins about new user
        // - Create some data for that user
        // - and more...
 
        return $rate;
    }
}