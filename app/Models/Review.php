<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable= ['user_id', 'item_id', 'rating', 'review'];
    protected $table= 'reviews';
}