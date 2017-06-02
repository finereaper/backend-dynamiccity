<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pandFoto extends Model
{
    public $table = "pandfoto";
    public $timestamps = false;
    protected $fillable = ['fotoURL','idPand'];
}
