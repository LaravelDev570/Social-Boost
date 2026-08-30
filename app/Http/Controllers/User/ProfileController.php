<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'   => 'required|string|min:2|max:100',
            'email'  => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone'  => ['nullable', 'string', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
            'bio'    => 'nullable|string|max:300',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'name.min'    => 'Name must be at least 2 characters.',
            'name.max'    => 'Name cannot exceed 100 characters.',
            'email.unique'=> 'This email is already in use.',
            'phone.regex' => 'Enter a valid phone number (7–20 digits, may include + and spaces).',
            'avatar.max'  => 'Photo must be under 2 MB.',
            'avatar.mimes'=> 'Only JPG, PNG, or WEBP images are allowed.',
            'bio.max'     => 'Bio cannot exceed 300 characters.',
        ]);

        $data = [
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio'   => $request->bio,
        ];

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            // Delete old avatar
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        $user->update($data);

        return back()->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password'         => [
                'required',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            ],
        ], [
            'password.min'    => 'Password must be at least 8 characters.',
            'password.regex'  => 'Password must contain at least one uppercase letter, one lowercase letter, and one number.',
            'password.confirmed' => 'Passwords do not match.',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.'])->withInput();
        }

        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('password_success', 'Password changed successfully!');
    }
}
