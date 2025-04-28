<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable= ['name', 'description', 'image', 'main_category', 'price', 'rating'];
    protected $table= 'items';
}
