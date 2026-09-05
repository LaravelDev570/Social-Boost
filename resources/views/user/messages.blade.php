@extends('layouts.user')

@section('title', 'Messages - SocialBoost')
@section('page_title', 'Messages')

@section('content')
<div class="row g-4 fade-in-up" style="height: calc(100vh - 140px);">

    <!-- Chat Window -->
    <div class="col-md-12">
        @if($admin)
        <div class="card card-glass border-0 h-100 d-flex flex-column">
            <div class="card-header bg-transparent border-secondary py-3 d-flex align-items-center gap-3">
                <img src="{{ $admin->avatar ? Storage::url($admin->avatar) : 'https://ui-avatars.com/api/?name='.urlencode($admin->name).'&background=3b82f6&color=fff' }}"
                     class="rounded-circle" width="38" height="38" style="object-fit:cover;">
                <div>
                    <h6 class="mb-0 fw-bold text-white">{{ $admin->name }} (Admin)</h6>
                    <small class="text-secondary">
                        @if($admin->isOnline())
                            <i class="bi bi-circle-fill text-success" style="font-size:8px;"></i> Online
                        @else
                            <i class="bi bi-clock me-1"></i>Last seen {{ $admin->last_seen ? $admin->last_seen->diffForHumans() : 'Never' }}
                        @endif
                    </small>
                </div>
            </div>
            
            <div class="card-body p-4 overflow-auto d-flex flex-column gap-3" id="chatBox">
                @forelse($messages as $msg)
                    @if($msg->sender_id === auth()->id())
                        <!-- Sent Message -->
                        <div class="d-flex justify-content-end mb-3">
                            <div class="d-flex flex-column align-items-end" style="max-width: 65%;">
                                <div class="bg-primary text-white p-3 shadow-sm" style="border-radius: 18px 18px 0px 18px; font-size: 0.95rem;">
                                    {{ $msg->message }}
                                </div>
                                <small class="text-secondary mt-1" style="font-size: 0.75rem;">
                                    {{ $msg->created_at->format('h:i A') }}
                                    @if($msg->is_read)
                                        <i class="bi bi-check-all text-primary ms-1 fs-6"></i>
                                    @else
                                        <i class="bi bi-check ms-1 fs-6"></i>
                                    @endif
                                </small>
                            </div>
                        </div>
                    @else
                        <!-- Received Message -->
                        <div class="d-flex justify-content-start mb-3">
                            <img src="{{ $admin->avatar ? Storage::url($admin->avatar) : 'https://ui-avatars.com/api/?name='.urlencode($admin->name).'&background=3b82f6&color=fff' }}"
                                 class="rounded-circle me-2 mt-1" width="32" height="32" style="object-fit:cover;">
                            <div class="d-flex flex-column align-items-start" style="max-width: 65%;">
                                <div class="bg-dark border border-secondary text-light p-3 shadow-sm" style="border-radius: 18px 18px 18px 0px; font-size: 0.95rem;">
                                    {{ $msg->message }}
                                </div>
                                <small class="text-secondary mt-1" style="font-size: 0.75rem;">{{ $msg->created_at->format('h:i A') }}</small>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="text-center text-secondary my-auto">
                        <i class="bi bi-chat-dots fs-1 mb-2 d-block"></i>
                        <p class="small">No messages yet. Send a message to contact Support!</p>
                    </div>
                @endforelse
            </div>

            <div class="card-footer bg-transparent border-secondary p-3">
                <form action="{{ route('user.messages.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="receiver_id" value="{{ $admin->id }}">
                    <div class="input-group">
                        <input type="text" name="message" class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary py-2" placeholder="Type your message here..." required autofocus autocomplete="off">
                        <button class="btn btn-primary px-4 fw-bold" type="submit">
                            <i class="bi bi-send-fill me-1"></i> Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @else
        <div class="card card-glass border-0 h-100 d-flex flex-column align-items-center justify-content-center">
            <div class="text-center text-secondary">
                <i class="bi bi-exclamation-triangle fs-1 mb-2 d-block"></i>
                <p>System Administrator account not found.</p>
            </div>
        </div>
        @endif
    </div>
</div>
@push('scripts')
<script>
    // Scroll to bottom of chat
    const chatBox = document.getElementById('chatBox');
    if (chatBox) {
        chatBox.scrollTop = chatBox.scrollHeight;
    }
</script>
@endpush
@endsection
