<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_name',
        'email',
        'first_name',
        'last_name',
        'mobile_no',
        'user_type',//1-super admin , 2-admin , 3-expert , 4 customer
        'status', // 1 active ,2 not active 
        'photo',
        'is_verfied',
        'balance',
        'password',
        
        

    ];

    public function Expert(): HasOne
    {
        return $this->hasOne(Expert::class, 'id' , 'user_id');
    }

    public function contract(): HasOne
    {
        return $this->hasOne(contract::class, 'id' , 'cutomer_id');
    }

    public function review(): HasOne
    {
        return $this->hasOne(review::class, 'id' , 'cutomer_id');
    }

    public function request_service(): HasOne
    {
        return $this->hasOne(request_service::class, 'id' , 'cutomer_id');
    }






    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
