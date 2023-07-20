<?php

namespace App\Http\Controllers;
use App\Models\Country;

class CountryController extends Controller
{
    //
    public function getCountries()
    {
        $countries = Country::get();
        return redirect($countries);
    }
}
