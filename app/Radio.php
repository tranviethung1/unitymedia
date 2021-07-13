<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    protected $table = "radios";

    protected $fillable = ['name', 'album', 'file', 'radio'];

}
