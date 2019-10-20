<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipamentoStatus extends Model
{
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $table = 'EquipamentoStatus';
}
