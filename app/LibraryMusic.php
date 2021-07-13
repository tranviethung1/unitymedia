<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibraryMusic extends Model
{
    protected $table = "library_music";

    protected $fillable = ['name', 'description', 'url', 'file'];
}
