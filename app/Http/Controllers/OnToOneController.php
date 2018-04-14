<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OnToOneController extends Controller
{
    public function oneToOne(){
        // $country = Country::find(1);
        $country = Country::where('name','Brasil')->get()->first();
        
        echo $country->name;
        
        // $location = $country->location;
        $location = $country->location()->get()->first();
        
        echo "<hr> Latitude: {$location->latitude} <br> ";
        echo "Logitude: {$location->longitude} <br> ";
    }
    
    public function oneToOneInverse(){
        $latitude  = 456;
        $longitude = 654;
        
        $location = Location::where('latitude', $latitude)->where('longitude', $longitude)->get()->first();
        
        $country = $location->country()->get()->first(); 
        
        echo $country->name;
    }
    
    public function oneToOneInsert(){
        $dataform = [
            'name'      => 'França',
            'latitude'  => '789',
            'longitude' => '987',            
        ];
        
        $country = Country::create($dataform);
        
        /* vinculando uma localização a um país
        $country = Country::where('name', 'França')->get()->first(); */
        
        
        /*  1ª forma de salvar
        
        $dataform['country_id'] = $country->id;
        $location = Location::create($dataform); */
        
        /* 2ª forma de salvar
        
        $location = new Location;
        $location->latitude   = $dataform['latitude'];
        $location->longitude  = $dataform['longitude'];
        $location->country_id = $country->id;
        $saveLocation = $location->save(); */
        
        // 3ª forma de salvar
        $location = $country->location()->create($dataform);
        
        var_dump($location);
        
        
    }
}
