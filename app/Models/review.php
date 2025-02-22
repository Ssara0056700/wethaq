<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'cutomer_id',
        'expert_id',
        'contract_id',
        'review',
        'comment',
        
      ];

      public function Expert(): HasOne
      {
          return $this->hasOne(Expert::class ,'expert_id', 'user_id');
      }

      public function User(): HasOne
      {
          return $this->hasOne(User::class , 'cutomer_id' , 'id');
      }

      public function contract(): HasOne
      {
          return $this->hasOne(contract::class , 'contract_id' , 'id');
      }
}
