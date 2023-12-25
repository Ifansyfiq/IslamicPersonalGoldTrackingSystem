<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(5);

        return view('user-profile.ViewUserProfilePage', [
            'users' => $users,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user-profile.ViewUserProfileDetailsPage', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, User $user)
    {

        // Validate the request
        $request->validate([
            'change_role' => 'required|in:Admin,User,Pawnshop Owner',
        ]);

        // Sync user roles
        $user->syncRoles([$request->input('change_role')]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Delete the user
        $user->delete();

        return redirect()->route('user.index');
    }
}
