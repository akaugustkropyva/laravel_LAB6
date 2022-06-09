<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function announcer(){
        return $this->belongsTo(Announcer::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
