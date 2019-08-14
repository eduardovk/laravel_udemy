<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{

  public function lista(){
    return (object) [
      "nome" => "Eduardo",
      "tel" => "55555555"
    ];
  }

}
