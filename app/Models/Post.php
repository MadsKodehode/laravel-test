<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'body'
    ];

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
    


    
    //Set inverse relationship between post and user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Create likes relationship
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
