<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    //Website has many subscribers
    public function subscribers() {
        return $this->hasMany(Subscriber::class);
    }

    //Website has many posts
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
