<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        // For simplicity, we just toggle status here instead of a full edit form
        $user->update(['status' => !$user->status]);
        return back()->with('success', "User ({$user->name}) status toggled successfully.");
    }
    
    public function updateRole(User $user)
    {
        // Toggle role between admin and user
        $newRole = $user->role === 'admin' ? 'user' : 'admin';
        
        // Prevent changing own role
        if ($user->id === auth()->id()) {
            return back()->with('error', "You cannot change your own role.");
        }
        
        $user->update(['role' => $newRole]);
        return back()->with('success', "User ({$user->name}) role changed to {$newRole}.");
    }

    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->with('error', "You cannot delete yourself.");
        }
        
        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }
}
