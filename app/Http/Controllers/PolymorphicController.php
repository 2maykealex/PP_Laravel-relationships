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
        // $city = City::where('name', 'Guarulhos')->get()->first();

        // echo "<h1>$city->name</h1><br>";

        // $comments = $city->comments()->get();

        // foreach ($comments as $comment){
        //     echo "{$comment->description} <hr>";
        // }


        // $state = State::where('name', 'Tocantins')->get()->first();

        // echo "<h1>$state->name</h1><br>";

        // $comments = $state->comments()->get();

        // foreach ($comments as $comment){
        //     echo "{$comment->description} <hr>";
        // }

        $country = Country::where('name', 'França')->get()->first();

        echo "<h1>$country->name</h1><br>";

        $comments = $country->comments()->get();

        foreach ($comments as $comment){
            echo "{$comment->description} <hr>";
        }


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
