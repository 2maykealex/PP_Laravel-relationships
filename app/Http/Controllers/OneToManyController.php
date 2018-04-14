<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany(){
        // $country = Country::where('name', 'Brasil')->get()->first();     
        
        $keySearch = "a";
        
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();     
            
        foreach ($countries as $country){
            
            $states = $country->states;
            //var_dump ($states);
            
            echo "<h1><strong>{$country->name}</strong> - Estados</h1>   ";
            
            foreach ($states as $state){
                echo "<hr> {$state->initials} - {$state->name} <br>";
            }
            echo "<hr>";
        }
    }
    
    public function oneToManyTwo(){
        // $country = Country::where('name', 'Brasil')->get()->first();     
        
        $keySearch = "a";
        
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();     
            
        foreach ($countries as $country){
            
            $states = $country->states;
            //var_dump ($states);
            
            echo "<h1><strong>{$country->name}</strong> - Estados</h1>   ";
            
            foreach ($states as $state){
                echo "<hr> {$state->initials} - {$state->name} <br>";
                
                foreach ($state->cities as $city){
                    echo " -  {$city->name} <br> ";
                }
            }
            echo "<hr>";
        }
    }
    
    public function manyToOne(){
        $stateName= 'Paris';
        
        $state = State::where('name', $stateName)->get()->first();
        
        $country = $state->country;
        
        echo "$state->name - $country->name";
    }
    
    public function oneToManyInsert(){
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
        ];
        
        $country = Country::find(1);
        
        $insertState = $country->states()->create($dataForm);
        
        var_dump($insertState->name);
        
    }
    
    public function oneToManyInsertTwo(){  //Obtendo o ID do País através de uma TAG SELECT e salvar novo Estado
        $dataForm = [
            'name' => 'Rondônia',
            'initials' => 'RO',
            'country_id' => '1',
        ];
        
        $insertState = State::create($dataForm);
        
        var_dump($insertState->name);
        
    }
    
    public function hasManyThrough(){   //Listar as cidades de um país (sem consultar Estados)
        $country = Country::find(1);
        
        echo "<h1>Cidades - <strong>{$country->name}</strong> </h1>   ";
        
        $cities = $country->cities;
        
        foreach ($cities as $city){
            echo " - {$city->name} <br>";
        }
        
        echo "<h2>Total de cidades: {$cities->count()}</h2> ";  
        
    }
}
