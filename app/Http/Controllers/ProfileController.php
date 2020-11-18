<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showProfile()
    {
        $user = User::findOrFail(Auth::id());

        return view('profile.index', compact('user'));
    }
    public function editProfile()
    {
        $user = User::findOrFail(Auth::id());

        return view('profile.edit', compact('user'));
    }
    public function updateProfile(Request $request, $id)
    {
        $request->validate(User::$rules);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('profile');
    }
    public function deleteAccount($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('logout');
    }
}
