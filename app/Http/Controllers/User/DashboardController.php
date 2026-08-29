<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
// use App\Models\ServiceRequest; // Will be created in Phase 3
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $stats = [
            // 'total_requests' => $user->serviceRequests()->count(),
            // 'active_requests' => $user->serviceRequests()->whereIn('status', ['Pending', 'In Progress', 'Waiting for User'])->count(),
        ];

        return view('user.dashboard', compact('stats', 'user'));
    }
}
