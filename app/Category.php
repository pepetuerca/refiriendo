<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public $table = "categories"; //aclaramos a Laravel que al referir a Category.php estamos hablando de la tabla "categories" de la BBDD
  public $timestamps = false;
  public $guarded = [];
}
