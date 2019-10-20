<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospitais extends Model
{
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $table = 'Hospitais';
}
