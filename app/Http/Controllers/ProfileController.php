<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(30)
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'bio' => ['string', 'nullable'],
            'avatar' => ['file'],
            'banner' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255'],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        if(request('banner')){
            $attributes['banner'] = request('banner')->store('banners');
        }

        $user->update($attributes);

        return redirect($user->path()); 
    }
}
