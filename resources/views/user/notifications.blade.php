@extends('layouts.user')

@section('title', 'Notifications - SocialBoost')
@section('page_title', 'Notifications')

@section('content')
<div class="card card-glass border-0 fade-in-up">
    <div class="card-header bg-transparent border-secondary py-3 d-flex justify-content-between align-items-center">
        <h6 class="mb-0 fw-bold text-white"><i class="bi bi-bell me-2 text-warning"></i>All Notifications</h6>
        <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 small" onclick="alert('Marked all as read!')">
            <i class="bi bi-check2-all me-1"></i>Mark all as read
        </button>
    </div>

    <div class="card-body p-0">
        @php
            $notifications = [
                ['id' => 1, 'icon' => 'bi-check-circle-fill', 'color' => 'text-success', 'bg' => 'bg-success', 'title' => 'Request Completed', 'msg' => 'Your request REQ-SAMPLE1 has been marked as completed. Leave a review!', 'time' => '2 hours ago', 'read' => false],
                ['id' => 2, 'icon' => 'bi-arrow-repeat', 'color' => 'text-warning', 'bg' => 'bg-warning', 'title' => 'Status Update: In Progress', 'msg' => 'Your request has been moved to In Progress. We are actively working on it!', 'time' => 'Yesterday, 3:15 PM', 'read' => false],
                ['id' => 3, 'icon' => 'bi-chat-dots-fill', 'color' => 'text-primary', 'bg' => 'bg-primary', 'title' => 'New Message from Admin', 'msg' => 'Admin replied to your conversation. Click here to read the message.', 'time' => 'Yesterday, 11:22 AM', 'read' => true],
                ['id' => 4, 'icon' => 'bi-send-fill', 'color' => 'text-info', 'bg' => 'bg-info', 'title' => 'Request Submitted Successfully', 'msg' => 'Your service request was submitted. Request ID: REQ-SAMPLE2. We will review it soon.', 'time' => '2 days ago', 'read' => true],
                ['id' => 5, 'icon' => 'bi-star-fill', 'color' => 'text-warning', 'bg' => 'bg-warning', 'title' => 'Review Reminder', 'msg' => 'You have a completed order. Share your experience and help others by leaving a review.', 'time' => '3 days ago', 'read' => true],
            ];
        @endphp

        <div class="table-responsive">
            <table class="table table-dark table-hover mb-0 dt-table align-middle">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Notification</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notifications as $n)
                    <tr>
                        <td>
                            @if(!$n['read'])
                                <span class="badge bg-primary">New</span>
                            @else
                                <span class="badge bg-secondary">Read</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="{{ $n['bg'] }} bg-opacity-10 {{ $n['color'] }} rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                     style="width:40px; height:40px;">
                                    <i class="bi {{ $n['icon'] }}"></i>
                                </div>
                                <div>
                                    <p class="mb-0 fw-bold text-white small">{{ $n['title'] }}</p>
                                    <p class="mb-0 text-secondary small text-truncate" style="max-width:300px;">{{ $n['msg'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <small class="text-secondary">{{ $n['time'] }}</small>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                @if(!$n['read'])
                                    <button class="btn btn-sm btn-outline-success"><i class="bi bi-check2"></i></button>
                                @endif
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
