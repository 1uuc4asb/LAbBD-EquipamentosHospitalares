<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposEquipamentos extends Model
{
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $table = 'TiposEquipamentos';
}
