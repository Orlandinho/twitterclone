<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255','alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['image', 'max:2048'],
            'email' => ['email', 'required', 'string', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);

        if(isset($attributes['avatar'])){

            if(Storage::exists($user->avatar)){

                Storage::delete($user->avatar);
            }

            $attributes['avatar'] = request()->file('avatar')->store('avatars');
        }


        $user->update($attributes);

        return redirect($user->path());
    }
}
