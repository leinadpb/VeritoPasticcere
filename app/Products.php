<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['title', 'pounds', 'colors', 'fill', 'decoration', 'category', 'description'];

}
