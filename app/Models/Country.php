<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;

class Country extends Model
{    
    protected $fillable = ['name'];
    
    public function location(){                            //relacionamento 1:1  retorna apenas 1 item
        return $this->hasOne(Location::class);
    }
    
    public function states(){
        return $this->hasMany(State::class);
    }
    
    public function cities(){                               //Listar as cidades de um país (sem consultar Estados)
        return $this->hasManyThrough(City::class, State::class);
    }
}
