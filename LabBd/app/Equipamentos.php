<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamentos extends Model
{
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $table = 'Equipamentos';
}
