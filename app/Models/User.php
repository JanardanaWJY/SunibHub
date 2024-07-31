<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use AuthenticatableTrait;

    protected $fillable=[
        'name',
        'email',
        'password'
    ];

    protected $guarded=['id'];

    public function setPasswordAttribute($value){

        if(Hash::needsRehash($value)){
            return $this->attributes['password'] = Hash::make($value);
        }else{
            $this->attributes['password'] = $value;
        }

    }

    public function thread(){
        return $this->hasMany(Thread::class);
    }

    public function reply(){
        return $this->hasMany(Reply::class);
    }
}
