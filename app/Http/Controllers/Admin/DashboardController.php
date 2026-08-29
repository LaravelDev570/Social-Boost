<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
// use App\Models\ServiceRequest; // Will be created in Phase 3
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::where('role', 'user')->count(),
            // 'active_requests' => ServiceRequest::whereIn('status', ['Pending', 'In Progress'])->count(),
            // 'completed_requests' => ServiceRequest::where('status', 'Completed')->count(),
        ];
        
        return view('admin.dashboard', compact('stats'));
    }
}
