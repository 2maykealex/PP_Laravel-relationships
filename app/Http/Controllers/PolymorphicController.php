<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
    public function polymorphic(){

    }

    public function polymorphicInsert(){
        // $city = City::where('name', 'Guarulhos')->get()->first();

        // echo $city->name;

        // $comment = $city->comments()->create([
        //     'description' => "New comment - {$city->name} ".date('YmdHis'),
        // ]);

        // var_dump($comment);


        // $state = State::where('name', 'Tocantins')->get()->first();

        // echo $state->name;

        // $comment = $state->comments()->create([
        //     'description' => "New comment - {$state->name} ".date('YmdHis'),
        // ]);

        // var_dump($comment);

        $country = Country::where('name', 'Brasil')->get()->first();

        echo $country->name;

        $comment = $country->comments()->create([
            'description' => "New comment - {$country->name} ".date('YmdHis'),
        ]);

        var_dump($comment);

    }


    // public function polymorphic(){

    // }
}
