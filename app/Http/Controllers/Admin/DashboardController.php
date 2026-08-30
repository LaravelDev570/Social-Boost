<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::where('role', 'user')->count(),
            'active_requests' => ServiceRequest::whereIn('status', ['Pending', 'In Progress'])->count(),
            'completed_requests' => ServiceRequest::where('status', 'Completed')->count(),
            'messages' => 5, // Dummy unread messages
        ];
        
        $recent_requests = ServiceRequest::with(['user', 'service'])->latest()->take(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recent_requests'));
    }
}
