<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        if(auth()->user()->following($user)){
            return back()
                ->with('message', "You have followed @$user->username");
        }
        return back()
            ->with('message', "You have unfollowed @$user->username");
    }
}
