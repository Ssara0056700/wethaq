<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'status',
      ];
}
