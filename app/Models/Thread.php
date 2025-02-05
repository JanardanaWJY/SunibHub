<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable= ['title', 'content', 'uid'];
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'uid');
    }

    public function reply(){
        return $this->hasMany(Reply::class);
    }
}
