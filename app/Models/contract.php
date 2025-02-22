<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    protected $fillable = [
        'cutomer_id',
        'proposal_id',
        'type',
        'price',
        'expert_id',
        'payment_id',
        'start_date',
        'end_date',
        'status',
        'service_id',
        'description',

      ];

      public function User(): HasOne
      {
          return $this->hasOne(User::class , 'cutomer_id' , 'id');
      }

      public function Expert(): HasOne
      {
          return $this->hasOne(Expert::class , 'expert_id' , 'user_id');
      }

      public function probosal(): HasOne
      {
          return $this->hasOne(probosal::class , 'proposal_id' , 'id');
      }
      
      public function payment_transaction(): HasOne
      {
          return $this->hasOne(payment_transaction::class , 'payment_id' , 'id');
  
      }

      public function review(): HasOne
      {
          return $this->hasOne(review::class , 'id', 'contract_id');

      }

      




      


}
