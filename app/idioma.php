<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{

	 protected $fillable = ['Nombre','personas_id'];

    public function persona()
    {
        return $this->belongsTo('App\Personas');
    }
}    