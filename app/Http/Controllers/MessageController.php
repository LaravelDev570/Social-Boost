<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Show the messages view for Admin or User.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $isAdmin = $user->role === 'admin';
        
        // If admin, get list of users who have sent or received messages, or all users
        if ($isAdmin) {
            $users = User::where('role', '!=', 'admin')->get();
            $activeUserId = $request->get('user_id', $users->first()->id ?? null);
            
            $messages = [];
            $activeUser = null;
            if ($activeUserId) {
                $activeUser = User::find($activeUserId);
                $messages = Message::where(function($q) use ($user, $activeUserId) {
                    $q->where('sender_id', $user->id)->where('receiver_id', $activeUserId);
                })->orWhere(function($q) use ($user, $activeUserId) {
                    $q->where('sender_id', $activeUserId)->where('receiver_id', $user->id);
                })->orderBy('created_at', 'asc')->get();
                
                // Mark received messages as read
                Message::where('sender_id', $activeUserId)
                       ->where('receiver_id', $user->id)
                       ->where('is_read', false)
                       ->update(['is_read' => true]);
            }
            
            return view('admin.messages.index', compact('users', 'activeUser', 'messages'));
        } 
        // If regular user, chat is always with the first admin
        else {
            $admin = User::where('role', 'admin')->first();
            
            $messages = [];
            if ($admin) {
                $messages = Message::where(function($q) use ($user, $admin) {
                    $q->where('sender_id', $user->id)->where('receiver_id', $admin->id);
                })->orWhere(function($q) use ($user, $admin) {
                    $q->where('sender_id', $admin->id)->where('receiver_id', $user->id);
                })->orderBy('created_at', 'asc')->get();
                
                // Mark received messages as read
                Message::where('sender_id', $admin->id)
                       ->where('receiver_id', $user->id)
                       ->where('is_read', false)
                       ->update(['is_read' => true]);
            }
            
            return view('user.messages', compact('admin', 'messages'));
        }
    }

    /**
     * Store a new message.
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'receiver_id' => 'required|exists:users,id'
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
            'is_read' => false,
        ]);

        return back()->with('success', 'Message sent.');
    }
}
