<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = ServiceRequest::with(['user', 'service', 'country'])->latest()->paginate(15);
        return view('admin.requests.index', compact('requests'));
    }

    public function show(ServiceRequest $request)
    {
        $request->load(['user', 'service', 'country']);
        return view('admin.requests.show', compact('request'));
    }

    public function updateStatus(Request $req, ServiceRequest $request)
    {
        $req->validate([
            'status' => 'required|in:Pending,In Progress,Waiting for User,Completed,Cancelled'
        ]);

        $request->update([
            'status' => $req->status
        ]);

        return back()->with('success', 'Request status updated successfully.');
    }
}
