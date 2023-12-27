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

        // Retrieve the search query from the request
            $search = request('search');

            // Retrieve all gold records for the current user and paginate the results
            $users = User::search(request(key: 'search'))->paginate(5);

            return view('user-profile.ViewUserProfilePage', [
                'users' => $users,
                'search' => $search,
            ]);

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

    /**
     * Dashboard information for Admin roles.
     */

    public function totalUser()
    {
        $totalUsers = User::count();

        return $totalUsers;
    }

    public function newUser()
    {
        $newUsers = User::where('created_at', '>=', now()->subDays(7))->count();

        return $newUsers;
    }

    public function typeUser()
    {
        $typeUsers = User::whereHas('roles', function ($query) {
            $query->where('name', 'Pawnshop Owner');
        })->count();

        return $typeUsers;
    }
}
