<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class ManyToManyController extends Controller
{
    public function manyToMany(){

        $city = City::where('name', 'São Paulo')->get()->first();

        echo "<h1>Cidade - <strong>{$city->name}</strong> </h1>   ";

        $companies =$city->companies;
       
        foreach ($companies as $company){
            echo " - {$company->name} <br>";
        }
    }
}
