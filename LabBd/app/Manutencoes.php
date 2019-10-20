<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manutencoes extends Model
{
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $table = 'Manutencoes';
}
