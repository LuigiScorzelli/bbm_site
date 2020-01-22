<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [ 'title', 'descriptions', 'image', 'is_active', 'created_at', 'name'];
}
