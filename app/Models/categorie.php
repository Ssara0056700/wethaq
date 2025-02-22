<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
      ];

      public function expert_categorie(): BelongsTo
      {
          return $this->belongsTo(expert_categorie::class,'id' , 'category_id' );
      }
}
