@extends('layouts.admin')

@section('title', 'Messages - SocialBoost Admin')
@section('page_title', 'Message Center')

@section('content')
<div class="row g-4 fade-in-up" style="height: calc(100vh - 140px);">

    <!-- Client List -->
    <div class="col-md-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-bold text-white">Conversations</h6>
                <span class="badge bg-primary rounded-pill">5</span>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush bg-transparent">

                    @php
                        $clients = [
                            ['name' => 'Regular User', 'req' => 'TikTok Setup', 'time' => '2 min ago', 'unread' => 2],
                            ['name' => 'Ahmad Raza', 'req' => 'YouTube SEO', 'time' => '1 hr ago', 'unread' => 0],
                            ['name' => 'Sara Khan', 'req' => 'Instagram Branding', 'time' => 'Yesterday', 'unread' => 1],
                            ['name' => 'James W.', 'req' => 'LinkedIn Profile', 'time' => '2 days ago', 'unread' => 0],
                        ];
                    @endphp

                    @foreach($clients as $client)
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-secondary text-light py-3 px-4">
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($client['name']) }}&background=334155&color=94a3b8"
                                 class="rounded-circle flex-shrink-0" width="40" height="40">
                            <div class="flex-grow-1 overflow-hidden">
                                <div class="d-flex justify-content-between">
                                    <strong class="small">{{ $client['name'] }}</strong>
                                    <span class="text-secondary" style="font-size:11px;">{{ $client['time'] }}</span>
                                </div>
                                <p class="text-secondary small mb-0 text-truncate">Re: {{ $client['req'] }}</p>
                            </div>
                            @if($client['unread'] > 0)
                                <span class="badge bg-primary rounded-pill">{{ $client['unread'] }}</span>
                            @endif
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Chat Window -->
    <div class="col-md-8">
        <div class="card card-glass border-0 h-100 d-flex flex-column">
            <div class="card-header bg-transparent border-secondary py-3 d-flex align-items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Regular+User&background=60a5fa&color=fff"
                     class="rounded-circle" width="38" height="38">
                <div>
                    <h6 class="mb-0 fw-bold">Regular User</h6>
                    <small class="text-secondary">Re: TikTok Setup &mdash; Request <span class="text-primary">REQ-SAMPLE1</span></small>
                </div>
            </div>

            <div class="card-body flex-grow-1 overflow-auto p-4" style="max-height:400px;" id="adminChatBox">
                <!-- Client Message -->
                <div class="d-flex gap-3 mb-4">
                    <img src="https://ui-avatars.com/api/?name=Regular+User&background=60a5fa&color=fff"
                         class="rounded-circle align-self-start" width="35" height="35">
                    <div>
                        <div class="bg-dark border border-secondary rounded-3 p-3" style="max-width:400px;">
                            <p class="mb-1 small">Hello! I've submitted my TikTok setup request. Can you confirm when work will begin?</p>
                        </div>
                        <small class="text-muted" style="font-size:11px;">Regular User &bull; Today, 10:32 AM</small>
                    </div>
                </div>
                <!-- Admin Message -->
                <div class="d-flex gap-3 mb-4 flex-row-reverse">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=3b82f6&color=fff"
                         class="rounded-circle align-self-start" width="35" height="35">
                    <div class="text-end">
                        <div class="bg-primary rounded-3 p-3" style="max-width:400px;">
                            <p class="mb-1 small text-white">Hi! Yes, we've reviewed your request and work begins tomorrow morning. We'll update you as we progress.</p>
                        </div>
                        <small class="text-muted" style="font-size:11px;">You &bull; Today, 10:35 AM</small>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-transparent border-secondary p-3">
                <div class="d-flex gap-3 align-items-center">
                    <input type="text" id="adminMsgInput" class="form-control bg-dark text-light border-secondary"
                           placeholder="Type a reply..." autocomplete="off">
                    <button class="btn btn-primary rounded-pill px-4" onclick="adminSend()">
                        <i class="bi bi-send"></i>
                    </button>
                </div>
                <p class="text-secondary text-center mt-2 mb-0" style="font-size:12px;">
                    <i class="bi bi-info-circle me-1"></i>Full real-time messaging is coming in Phase 5.
                </p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function adminSend() {
    const input = document.getElementById('adminMsgInput');
    const box = document.getElementById('adminChatBox');
    if (!input.value.trim()) return;
    box.insertAdjacentHTML('beforeend', `
        <div class="d-flex gap-3 mb-4 flex-row-reverse">
            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=3b82f6&color=fff" class="rounded-circle align-self-start" width="35" height="35">
            <div class="text-end">
                <div class="bg-primary rounded-3 p-3" style="max-width:400px;">
                    <p class="mb-1 small text-white">${input.value}</p>
                </div>
                <small class="text-muted" style="font-size:11px;">You &bull; Just now</small>
            </div>
        </div>`);
    box.scrollTop = box.scrollHeight;
    input.value = '';
}
document.getElementById('adminMsgInput')?.addEventListener('keydown', e => { if (e.key === 'Enter') adminSend(); });
</script>
@endpush
@endsection
