<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class expert_categorie extends Model
{
    protected $fillable = [
        'category_id',
        'expert_id',
       
      ];

      public function Expert()
      {
          return $this->belongsTo(Expert::class ,'expert_id', 'user_id');
      }

      public function categorie(): HasMany
    {
        return $this->hasMany(categorie::class ,'category_id','id');
    }
      
}
