<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huurder extends Model
{
    public $timestamps = false;
    protected $table = "huurder";
    public $primaryKey = "huurder_ID";
}
