<?php

namespace App\Models;

use App\Models\Like;
use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
    use HasFactory, Likeable;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function getImageAttribute($value)
    // {
    //     return asset($value);
    // }
}
