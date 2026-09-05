@extends('layouts.user')

@section('title', 'My Profile - SocialBoost')
@section('page_title', 'My Profile')

@section('content')
<div class="row g-4 fade-in-up">

    <!-- Left: Profile Info -->
    <div class="col-lg-7">
        <div class="card card-glass border-0 mb-4">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold"><i class="bi bi-person-circle me-2 text-primary"></i>Account Information</h6>
            </div>
            <div class="card-body p-4">

                @if(session('success'))
                    <div class="alert bg-success bg-opacity-25 text-light border-0 rounded mb-4 py-2 small">
                        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    </div>
                @endif
                @if($errors->any() && !$errors->has('current_password') && !$errors->has('password'))
                    <div class="alert bg-danger bg-opacity-25 text-light border-0 rounded mb-4 py-2 small">
                        <i class="bi bi-exclamation-triangle me-2"></i>Please fix the errors below.
                    </div>
                @endif

                <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Avatar Upload -->
                    <div class="mb-5 text-center">
                        <div class="position-relative d-inline-block mb-3">
                            <img id="avatarPreview"
                                 src="{{ $user->avatar ? Storage::url($user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=3b82f6&color=fff&size=200' }}"
                                 alt="Profile Photo"
                                 class="rounded-circle shadow-sm"
                                 style="width:130px; height:130px; object-fit:cover; border: 3px solid rgba(255,255,255,0.1);">
                            
                            <label for="avatarInput" class="position-absolute bottom-0 end-0 bg-primary rounded-circle d-flex align-items-center justify-content-center shadow-lg"
                                   style="width:36px; height:36px; cursor:pointer; right: -5px; bottom: 5px; transition: all 0.2s;" title="Upload New Photo" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                <i class="bi bi-camera-fill text-white fs-6"></i>
                            </label>
                            
                            <input type="file" id="avatarInput" name="avatar" class="d-none" accept="image/jpg,image/jpeg,image/png,image/webp"
                                   onchange="previewAvatar(this)">
                        </div>
                        
                        <div class="d-flex justify-content-center gap-2 align-items-center">
                            <span class="text-secondary small">JPEG, PNG or WEBP (Max 2MB)</span>
                            @if($user->avatar)
                                <span class="text-secondary small">&bull;</span>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1" style="font-size: 11px;" onclick="removeAvatar()">
                                    <i class="bi bi-x-circle me-1"></i>Remove
                                </button>
                            @endif
                        </div>
                        <input type="hidden" name="remove_avatar" id="removeAvatarInput" value="0">
                        @error('avatar')
                            <div class="text-danger small mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label text-light small fw-bold">Full Name <span class="text-danger">*</span></label>
                            <span class="text-muted small" id="nameCount">0/15</span>
                        </div>
                        <input type="text" name="name" id="nameInput" value="{{ old('name', $user->name) }}"
                               class="form-control form-control-sm bg-dark text-light border-secondary @error('name') border-danger @enderror"
                               minlength="8" maxlength="15" pattern="[A-Za-z\s]+" title="Only English letters and spaces allowed" required>
                        @error('name')
                            <div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light small fw-bold">Email Address <span class="text-danger">*</span></label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                               class="form-control form-control-sm bg-dark text-light border-secondary @error('email') border-danger @enderror"
                               required>
                        @error('email')
                            <div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label text-light small fw-bold">Phone Number</label>
                            <span class="text-muted small" id="phoneCount">0/13</span>
                        </div>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text bg-dark border-secondary text-secondary">
                                <i class="bi bi-telephone"></i>
                            </span>
                            <input type="text" name="phone" id="phoneInput" value="{{ old('phone', $user->phone ?? '') }}"
                                   placeholder="3001234567890" maxlength="13" pattern="\d{13}" title="Exactly 13 digits required"
                                   class="form-control form-control-sm bg-dark text-light border-secondary @error('phone') border-danger @enderror">
                        </div>
                        <div class="form-text text-muted" style="font-size:11px;">Must be exactly 13 digits (e.g. 923001234567)</div>
                        @error('phone')
                            <div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-light small fw-bold">Bio <span class="text-secondary small">(optional, max 300 chars)</span></label>
                        <textarea name="bio" maxlength="300" rows="3"
                                  placeholder="Tell us a bit about yourself or your business..."
                                  class="form-control bg-dark text-light border-secondary @error('bio') border-danger @enderror">{{ old('bio', $user->bio ?? '') }}</textarea>
                        <div class="d-flex justify-content-between">
                            @error('bio')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @else
                                <div></div>
                            @enderror
                            <div class="form-text text-muted" id="bioCount">0/300</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label text-secondary small">Role</label>
                            <input type="text" value="{{ ucfirst($user->role) }}"
                                   class="form-control bg-dark text-secondary border-secondary" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label text-secondary small">Member Since</label>
                            <input type="text" value="{{ $user->created_at->format('M d, Y') }}"
                                   class="form-control bg-dark text-secondary border-secondary" readonly>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold">
                        <i class="bi bi-save me-2"></i>Save Profile
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Right: Avatar Card + Change Password -->
    <div class="col-lg-5">
        <!-- Avatar Card -->
        <div class="card card-glass border-0 mb-4 text-center">
            <div class="card-body p-4">
                <img id="sideAvatar"
                     src="{{ $user->avatar ? Storage::url($user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&background=3b82f6&color=fff&size=128' }}"
                     alt="Avatar"
                     class="rounded-circle mb-3 border border-2 border-primary"
                     style="width:80px; height:80px; object-fit:cover;">
                <h5 class="fw-bold mb-0">{{ $user->name }}</h5>
                <p class="text-secondary small mb-1">{{ $user->email }}</p>
                @if($user->phone)
                    <p class="text-secondary small mb-1"><i class="bi bi-telephone me-1"></i>{{ $user->phone }}</p>
                @endif
                <span class="badge bg-primary mb-2">{{ ucfirst($user->role) }}</span>
                @if($user->bio)
                    <p class="text-muted small mt-2 mb-0" style="font-style:italic;">"{{ $user->bio }}"</p>
                @endif
            </div>
        </div>

        <!-- Change Password -->
        <div class="card card-glass border-0">
            <div class="card-header bg-transparent border-secondary py-3">
                <h6 class="mb-0 fw-bold"><i class="bi bi-shield-lock me-2 text-warning"></i>Change Password</h6>
            </div>
            <div class="card-body p-4">

                @if(session('password_success'))
                    <div class="alert bg-success bg-opacity-25 text-light border-0 rounded mb-4 py-2 small">
                        <i class="bi bi-check-circle me-2"></i>{{ session('password_success') }}
                    </div>
                @endif

                <form action="{{ route('user.profile.password') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label text-light small fw-bold">Current Password</label>
                        <input type="password" name="current_password"
                               class="form-control bg-dark text-light border-secondary @error('current_password') border-danger @enderror" required>
                        @error('current_password')
                            <div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label text-light small fw-bold">New Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="newPw"
                                   class="form-control bg-dark text-light border-secondary @error('password') border-danger @enderror"
                                   required oninput="checkStrength(this.value)">
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePw('newPw', this)">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                        <!-- Password Strength Bar -->
                        <div class="mt-2" id="strengthBar" style="display:none;">
                            <div class="progress mb-1" style="height:5px; background:rgba(255,255,255,0.1);">
                                <div id="strengthFill" class="progress-bar" style="width:0%; transition: all 0.3s;"></div>
                            </div>
                            <div id="strengthLabel" class="text-muted" style="font-size:11px;"></div>
                            <ul class="list-unstyled mt-1 mb-0" style="font-size:11px; color:#64748b;">
                                <li id="chkLen"><i class="bi bi-x-circle text-danger me-1"></i>At least 8 characters</li>
                                <li id="chkUpper"><i class="bi bi-x-circle text-danger me-1"></i>One uppercase letter</li>
                                <li id="chkLower"><i class="bi bi-x-circle text-danger me-1"></i>One lowercase letter</li>
                                <li id="chkNum"><i class="bi bi-x-circle text-danger me-1"></i>One number</li>
                            </ul>
                        </div>
                        @error('password')
                            <div class="text-danger small mt-1"><i class="bi bi-exclamation-circle me-1"></i>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-light small fw-bold">Confirm New Password</label>
                        <input type="password" name="password_confirmation"
                               class="form-control bg-dark text-light border-secondary" required>
                    </div>

                    <button type="submit" class="btn btn-warning text-dark rounded-pill px-4 fw-bold w-100">
                        <i class="bi bi-key me-2"></i>Update Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Live Counters
const nameInput = document.getElementById('nameInput');
const nameCount = document.getElementById('nameCount');
const phoneInput = document.getElementById('phoneInput');
const phoneCount = document.getElementById('phoneCount');

if(nameInput) {
    nameCount.textContent = nameInput.value.length + '/15';
    nameInput.addEventListener('input', () => { nameCount.textContent = nameInput.value.length + '/15'; });
}
if(phoneInput) {
    phoneCount.textContent = phoneInput.value.length + '/13';
    phoneInput.addEventListener('input', () => {
        phoneInput.value = phoneInput.value.replace(/\D/g, ''); // Ensure only numbers
        phoneCount.textContent = phoneInput.value.length + '/13';
    });
}

// Avatar preview & remove
function previewAvatar(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('avatarPreview').src = e.target.result;
            document.getElementById('sideAvatar').src = e.target.result;
            document.getElementById('removeAvatarInput').value = '0';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function removeAvatar() {
    const defaultImg = 'https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=3b82f6&color=fff&size=128';
    document.getElementById('avatarPreview').src = defaultImg;
    document.getElementById('sideAvatar').src = defaultImg;
    document.getElementById('avatarInput').value = '';
    document.getElementById('removeAvatarInput').value = '1';
}

// Bio counter
const bioArea = document.querySelector('textarea[name="bio"]');
const bioCount = document.getElementById('bioCount');
if (bioArea && bioCount) {
    bioCount.textContent = bioArea.value.length + '/300';
    bioArea.addEventListener('input', () => { bioCount.textContent = bioArea.value.length + '/300'; });
}

// Password strength
function checkStrength(pw) {
    const bar = document.getElementById('strengthBar');
    const fill = document.getElementById('strengthFill');
    const label = document.getElementById('strengthLabel');
    bar.style.display = 'block';

    const checks = {
        len:   pw.length >= 8,
        upper: /[A-Z]/.test(pw),
        lower: /[a-z]/.test(pw),
        num:   /[0-9]/.test(pw),
    };

    function setCheck(id, ok) {
        const el = document.getElementById(id);
        el.innerHTML = ok
            ? '<i class="bi bi-check-circle-fill text-success me-1"></i>' + el.textContent.replace(/.*\s/, ' ').trim()
            : '<i class="bi bi-x-circle text-danger me-1"></i>' + el.textContent.replace(/.*\s/, ' ').trim();
    }
    setCheck('chkLen', checks.len);
    setCheck('chkUpper', checks.upper);
    setCheck('chkLower', checks.lower);
    setCheck('chkNum', checks.num);

    const score = Object.values(checks).filter(Boolean).length;
    const levels = ['', 'bg-danger', 'bg-warning', 'bg-info', 'bg-success'];
    const labels = ['', 'Weak', 'Fair', 'Good', 'Strong'];
    fill.className = 'progress-bar ' + (levels[score] || '');
    fill.style.width = (score * 25) + '%';
    label.textContent = labels[score] || '';
    label.className = score < 3 ? 'text-danger' : score < 4 ? 'text-warning' : 'text-success';
    label.style.fontSize = '11px';
}

// Toggle password visibility
function togglePw(id, btn) {
    const input = document.getElementById(id);
    const isHidden = input.type === 'password';
    input.type = isHidden ? 'text' : 'password';
    btn.innerHTML = isHidden ? '<i class="bi bi-eye-slash"></i>' : '<i class="bi bi-eye"></i>';
}

// Fix check labels text
document.querySelectorAll('#chkLen, #chkUpper, #chkLower, #chkNum').forEach(el => {
    el._text = el.textContent.split(' ').slice(1).join(' ');
});
function setCheck(id, ok) {
    const el = document.getElementById(id);
    if (!el) return;
    const text = el._text || el.textContent.replace(/^\S+\s/, '');
    el._text = text;
    el.innerHTML = ok
        ? `<i class="bi bi-check-circle-fill text-success me-1"></i>${text}`
        : `<i class="bi bi-x-circle text-danger me-1"></i>${text}`;
}
</script>
@endpush
@endsection
