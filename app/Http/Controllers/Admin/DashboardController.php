<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ServiceRequest;
use App\Models\Lead;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::where('role', 'user')->count(),
            'active_requests' => ServiceRequest::whereIn('status', ['Pending', 'In Progress'])->count(),
            'completed_requests' => ServiceRequest::where('status', 'Completed')->count(),
            'total_leads' => Lead::count(),
            'new_leads' => Lead::where('status', 'new')->count(),
            'unread_messages' => Message::where('receiver_id', auth()->id())->where('is_read', false)->count(),
        ];
        
        $recent_requests = ServiceRequest::with(['user', 'service'])->latest()->take(5)->get();
        $recent_leads = Lead::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recent_requests', 'recent_leads'));
    }
}
