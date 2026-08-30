<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $stats = [
            'total_requests' => $user->serviceRequests()->count(),
            'active_requests' => $user->serviceRequests()->whereIn('status', ['Pending', 'In Progress', 'Waiting for User'])->count(),
            'completed_requests' => $user->serviceRequests()->where('status', 'Completed')->count(),
        ];
        
        $recent_requests = $user->serviceRequests()->with('service')->latest()->take(5)->get();

        return view('user.dashboard', compact('stats', 'user', 'recent_requests'));
    }
}
