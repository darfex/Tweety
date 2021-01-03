<?php

namespace App\Traits;

use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait Likeable
{
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function toggleLike(User $user)
    {
        if ($this->isLikedby($user))
        {
            $this->likes()
                ->where('user_id', $user->id)
                ->where('tweet_id', $this->id)
                ->delete($user);
        }else{
            $this->likes()->Create([
                'user_id' => $user ? $user->id : auth()->id()
            ]);
        }
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes()
            ->where('tweet_id', $this->id)
            ->count();
    }

    public function scopeWithLikes(Builder $query)
    {
         $query->leftJoinSub(
            'SELECT tweet_id, COUNT(tweet_id) likes FROM likes GROUP BY tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    // public function scopeWithLikes(Builder $query)
    // {
    //     $query->leftJoinSub(
    //         'SELECT tweet_id, SUM(liked) likes, SUM(!liked) dislikes FROM likes GROUP BY tweet_id',
    //         'likes',
    //         'likes.tweet_id',
    //         'tweets.id'
    //     );
    // }

    // public function like($user = null, $liked = true)
    // {
    //     $this->likes()->updateOrCreate(
    //         ['user_id' => $user ? $user->id : auth()->id()],
    //         ['liked' => $liked]
    //     );
    // }

    // public function dislike($user = null)
    // {
    //     return $this->like($user, false);
    // }


    // public function isLikedBy(User $user, $liked = true)
    // {
    //     return (bool) $user->likes
    //         ->where('tweet_id', $this->id)
    //         ->where('liked', $liked)
    //         ->count();
    // }

    // public function isDislikedBy(User $user)
    // {
    //     return $this->isLikedBy($user, false);
    // }
}