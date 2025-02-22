<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class request_service extends Model
{
    protected $fillable = [
        'cutomer_id',
        'expert_id',
        'service_type',
        'category',
        'description',
        'price',
        'status',
        'admin_notes',
        'notes',
      ];

      public function User(): HasOne
      {
          return $this->hasOne(User::class , 'cutomer_id', 'id');
      }

      public function Expert(): HasOne
      {
          return $this->hasOne(Expert::class , 'expert_id', 'user_id');
      }

      public function categorie(): HasOne
      {
          return $this->belongsTo(categorie::class ,'category'  , 'id');
      }

      public function probosal(): HasOne
      {
          return $this->hasOne(probosal::class , 'id' , 'id');
      } 

      

      
}
