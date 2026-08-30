@extends('layouts.user')

@section('title', 'Messages - SocialBoost')
@section('page_title', 'Messages')

@section('content')
<div class="row g-4 fade-in-up" style="height: calc(100vh - 140px);">

    <!-- Conversation List -->
    <div class="col-md-4">
        <div class="card card-glass border-0 h-100">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold">Conversations</h6>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush bg-transparent">
                    <!-- Admin Conversation -->
                    <a href="#" class="list-group-item list-group-item-action bg-transparent border-secondary text-light py-3 px-4 active-convo">
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=fff"
                                 class="rounded-circle" width="40" height="40" alt="Admin">
                            <div class="flex-grow-1 overflow-hidden">
                                <div class="d-flex justify-content-between">
                                    <strong class="small">SocialBoost Admin</strong>
                                    <span class="text-secondary" style="font-size: 11px;">2 min ago</span>
                                </div>
                                <p class="text-secondary small mb-0 text-truncate">We will start working on your TikTok account shortly...</p>
                            </div>
                            <span class="badge bg-primary rounded-pill">2</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat Window -->
    <div class="col-md-8">
        <div class="card card-glass border-0 h-100 d-flex flex-column">
            <div class="card-header bg-transparent border-secondary py-3 d-flex align-items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=fff"
                     class="rounded-circle" width="38" height="38" alt="Admin">
                <div>
                    <h6 class="mb-0 fw-bold">SocialBoost Admin</h6>
                    <small class="text-success"><i class="bi bi-circle-fill me-1" style="font-size:8px;"></i>Online</small>
                </div>
            </div>

            <!-- Messages Area -->
            <div class="card-body flex-grow-1 overflow-auto p-4" style="max-height: 420px;" id="chatBox">

                <!-- Admin Message -->
                <div class="d-flex gap-3 mb-4">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=fff"
                         class="rounded-circle align-self-start" width="35" height="35" alt="Admin">
                    <div>
                        <div class="bg-dark border border-secondary rounded-3 p-3" style="max-width: 400px;">
                            <p class="mb-1 small">Hello! Thank you for submitting your request. We have received it and will review it shortly.</p>
                        </div>
                        <small class="text-muted" style="font-size:11px;">Admin &bull; Today, 10:32 AM</small>
                    </div>
                </div>

                <!-- User Message -->
                <div class="d-flex gap-3 mb-4 flex-row-reverse">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=60a5fa&color=fff"
                         class="rounded-circle align-self-start" width="35" height="35" alt="Me">
                    <div class="text-end">
                        <div class="bg-primary rounded-3 p-3" style="max-width: 400px;">
                            <p class="mb-1 small text-white">Great! Please let me know if you need any additional information from me.</p>
                        </div>
                        <small class="text-muted" style="font-size:11px;">You &bull; Today, 10:35 AM</small>
                    </div>
                </div>

                <!-- Admin Message -->
                <div class="d-flex gap-3 mb-4">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=fff"
                         class="rounded-circle align-self-start" width="35" height="35" alt="Admin">
                    <div>
                        <div class="bg-dark border border-secondary rounded-3 p-3" style="max-width: 400px;">
                            <p class="mb-1 small">We will start working on your TikTok account shortly. Please share your channel name and handle when ready.</p>
                        </div>
                        <small class="text-muted" style="font-size:11px;">Admin &bull; Today, 10:38 AM</small>
                    </div>
                </div>

            </div>

            <!-- Input Box -->
            <div class="card-footer bg-transparent border-secondary p-3">
                <div class="d-flex gap-3 align-items-center">
                    <input type="text" id="msgInput" class="form-control bg-dark text-light border-secondary"
                           placeholder="Type a message..." autocomplete="off">
                    <button class="btn btn-primary rounded-pill px-4" onclick="sendMessage()">
                        <i class="bi bi-send"></i>
                    </button>
                </div>
                <p class="text-secondary text-center mt-3 mb-0" style="font-size:12px;">
                    <i class="bi bi-info-circle me-1"></i>
                    Full real-time messaging is coming in Phase 5. Use 
                    <a href="https://wa.me/1234567890" target="_blank" class="text-success">WhatsApp</a> for urgent replies.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function sendMessage() {
    const input = document.getElementById('msgInput');
    const chatBox = document.getElementById('chatBox');
    if (!input.value.trim()) return;

    const msgHtml = `
        <div class="d-flex gap-3 mb-4 flex-row-reverse">
            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=60a5fa&color=fff"
                 class="rounded-circle align-self-start" width="35" height="35">
            <div class="text-end">
                <div class="bg-primary rounded-3 p-3" style="max-width: 400px;">
                    <p class="mb-1 small text-white">${input.value}</p>
                </div>
                <small class="text-muted" style="font-size:11px;">You &bull; Just now</small>
            </div>
        </div>`;
    chatBox.insertAdjacentHTML('beforeend', msgHtml);
    chatBox.scrollTop = chatBox.scrollHeight;
    input.value = '';
}
document.getElementById('msgInput').addEventListener('keydown', function(e) {
    if (e.key === 'Enter') sendMessage();
});
</script>
@endsection
