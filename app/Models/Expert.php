<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = [
      'user_id',
      'profile_name',
      'hourly_rate',
      'avilable',
      'skills',
      'status',
     
    ];
    public function User(){
        return $this->hasOne(User::class , 'user_id','id');
    }

    public function probosal(): HasOne
    {
        return $this->hasOne(probosal::class , 'user_id' , 'expert_id');
    } 

    public function review(): HasOne
    {
        return $this->hasOne(review::class , 'user_id' , 'expert_id');
    }

    public function contract(): HasOne
    {
        return $this->hasOne(contract::class , 'user_id' , 'expert_id');
    }

    public function request_service(): HasOne
    {
        return $this->hasOne(request_service::class , 'user_id' , 'expert_id');
    }

    public function expert_categorie(): HasMany
    {
        return $this->hasMany(expert_categorie::class ,'user_id' , 'expert_id' );
    }





    

}
