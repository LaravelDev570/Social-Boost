<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
            'platform' => 'required|in:TikTok,YouTube,Both',
            'target_country' => 'required|in:USA,UK,Canada,Australia,New Zealand,UAE',
            'message' => 'nullable|string|max:500',
        ]);

        Lead::create($validated);

        return back()->with('lead_success', 'Your request has been submitted successfully! We will contact you shortly via WhatsApp.');
    }
}
