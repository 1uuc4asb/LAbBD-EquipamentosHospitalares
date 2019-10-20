<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposManutencoes extends Model
{
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $table = 'TiposManutencoes';
}
