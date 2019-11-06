<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addmaterial extends Model
{
    protected $fillable = [
        'id_ref', 'material','amount','unit',
    ];
}
