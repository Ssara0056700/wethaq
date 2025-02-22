<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment_transaction extends Model
{
    protected $fillable = [
        'contract_id',
        'customer_id',
        'amount',
        'payment_method',
        'status',
        'getway_id',
        'notes',

      ];

      public function contract(): HasOne
      {
          return $this->hasOne(contract::class , 'contract_id' , 'id');
      }
}
