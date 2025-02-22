<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class probosal extends Model
{
    protected $fillable = [
        'service_id',
        'expert_id',
        'description',
        'price',
        'status',

      ];

      public function Expert(): HasOne
      {
          return $this->hasOne(Expert::class , 'expert_id' , 'user_id');
      }

      public function contract(): HasOne
      {
          return $this->hasOne(contract::class , 'id' , 'proposal_id');
      }
      public function request_service(): HasOne
      {
          return $this->hasOne(request_service::class ,  'id' , 'id');
      }

}
