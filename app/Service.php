<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
 public $guarded=[];




public function getNombre(){
    return $this->name;
}
public function getIdService(){
    return $this->id;
}
public function getAlta(){
    return $this->created_at;
}


}
