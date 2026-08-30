<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index()
    {
        $requests = Auth::user()->serviceRequests()->latest()->paginate(10);
        return view('user.requests.index', compact('requests'));
    }

    public function create()
    {
        $services = Service::where('status', true)->get();
        $countries = Country::where('status', true)->get();
        return view('user.requests.create', compact('services', 'countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'country_id' => 'required|exists:countries,id',
            'details' => 'required|string',
        ]);

        $serviceRequest = ServiceRequest::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id,
            'country_id' => $request->country_id,
            'details' => $request->details,
            'status' => 'Pending',
        ]);

        return redirect()->route('user.requests.index')->with('success', 'Your request ('.$serviceRequest->uuid.') has been submitted successfully.');
    }

    public function show(ServiceRequest $request)
    {
        if ($request->user_id !== Auth::id()) abort(403);
        return view('user.requests.show', compact('request'));
    }
}
