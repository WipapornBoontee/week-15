@extends('layouts.app')

@section('title')
เข้าสู่ระบบ
@endsection

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="premium-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center p-3 mb-3 text-primary" style="width: 64px; height: 64px;">
                        <i class="bi bi-person-fill-lock fs-2"></i>
                    </div>
                    <h3 class="fw-bolder text-dark mb-1">เข้าสู่ระบบนักเขียน</h3>
                    <p class="text-muted small">กรอกอีเมลและรหัสผ่านเพื่อเข้าจัดการบทความ</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold text-dark small text-uppercase">อีเมล (Email)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 rounded-start-4 text-muted">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input id="email" type="email" class="form-control border-start-0 rounded-end-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                        </div>
                        @error('email')
                            <span class="invalid-feedback d-block mt-1 small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label fw-bold text-dark small text-uppercase mb-0">รหัสผ่าน</label>
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none small text-primary" href="{{ route('password.request') }}">
                                    ลืมรหัสผ่าน?
                                </a>
                            @endif
                        </div>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 rounded-start-4 text-muted">
                                <i class="bi bi-key"></i>
                            </span>
                            <input id="password" type="password" class="form-control border-start-0 rounded-end-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••">
                        </div>
                        @error('password')
                            <span class="invalid-feedback d-block mt-1 small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-muted small" for="remember">
                            จดจำการเข้าสู่ระบบ
                        </label>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-gradient rounded-pill py-2 fw-bold">
                            <i class="bi bi-box-arrow-in-right me-1"></i> เข้าสู่ระบบ
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="text-muted small mb-0">
                            ยังไม่มีบัญชีนักเขียน? 
                            <a href="{{ route('register') }}" class="text-primary fw-bold text-decoration-none">สมัครสมาชิก</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
