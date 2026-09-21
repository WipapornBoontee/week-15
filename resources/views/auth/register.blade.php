@extends('layouts.app')

@section('title')
สมัครเป็นนักเขียน
@endsection

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="premium-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center p-3 mb-3 text-primary" style="width: 64px; height: 64px;">
                        <i class="bi bi-person-plus-fill fs-2"></i>
                    </div>
                    <h3 class="fw-bolder text-dark mb-1">สมัครเป็นนักเขียน</h3>
                    <p class="text-muted small">สร้างบัญชีเพื่อเริ่มเผยแพร่บทความของคุณ</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold text-dark small text-uppercase">ชื่อ-นามสกุล หรือ นามปากกา</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 rounded-start-4 text-muted">
                                <i class="bi bi-person"></i>
                            </span>
                            <input id="name" type="text" class="form-control border-start-0 rounded-end-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="เช่น สมชาย ใจดี">
                        </div>
                        @error('name')
                            <span class="invalid-feedback d-block mt-1 small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold text-dark small text-uppercase">อีเมล (Email)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 rounded-start-4 text-muted">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input id="email" type="email" class="form-control border-start-0 rounded-end-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                        </div>
                        @error('email')
                            <span class="invalid-feedback d-block mt-1 small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold text-dark small text-uppercase">รหัสผ่าน</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 rounded-start-4 text-muted">
                                <i class="bi bi-key"></i>
                            </span>
                            <input id="password" type="password" class="form-control border-start-0 rounded-end-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="อย่างน้อย 8 ตัวอักษร">
                        </div>
                        @error('password')
                            <span class="invalid-feedback d-block mt-1 small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label fw-bold text-dark small text-uppercase">ยืนยันรหัสผ่านอีกครั้ง</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0 rounded-start-4 text-muted">
                                <i class="bi bi-shield-lock"></i>
                            </span>
                            <input id="password-confirm" type="password" class="form-control border-start-0 rounded-end-4" name="password_confirmation" required autocomplete="new-password" placeholder="กรอกรหัสผ่านซ้ำอีกครั้ง">
                        </div>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-gradient rounded-pill py-2 fw-bold">
                            <i class="bi bi-check2-circle me-1"></i> ยืนยันการสมัคร
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="text-muted small mb-0">
                            มีบัญชีอยู่แล้ว? 
                            <a href="{{ route('login') }}" class="text-primary fw-bold text-decoration-none">เข้าสู่ระบบ</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
