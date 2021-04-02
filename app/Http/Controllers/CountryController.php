<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        dd(Country::all());
    }

    public function show(Country $country, $countryId)
    {
        $country = Country::find($countryId);
        dump('cities');
        dump($country->cities);
        dump('streets');
        dump($country->cities()->first()->streets);
    }
}
