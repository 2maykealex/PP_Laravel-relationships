<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

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


    public function manyToManyInverse(){
        $company = Company::where('name', 'EspecializaTI')->get()->first();

        echo "<h1>Empresa - <strong>{$company->name}</strong> </h1>   ";

        $cities =$company->cities;
       
        foreach ($cities as $city){
            echo " - {$city->name} <br>";
        }
    }
}
