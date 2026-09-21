@extends('layouts.app')

@section('title')
หน้าหลักผู้ใช้
@endsection

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="premium-card p-4 p-md-5">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center fw-bold fs-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <div>
                        <h2 class="fw-bolder text-dark mb-0">แผงควบคุม (Dashboard)</h2>
                        <span class="text-muted">ยินดีต้อนรับเข้าสู่ระบบจัดการบทความ</span>
                    </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show rounded-4 p-3 border-0 mb-4" role="alert" style="background-color: #ecfdf5; border-left: 5px solid #10b981 !important;">
                        <i class="bi bi-check-circle-fill text-success me-2"></i> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="p-4 rounded-4 bg-light mb-4">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge bg-success rounded-pill px-3 py-2">
                            <i class="bi bi-person-check-fill me-1"></i> เข้าสู่ระบบแล้ว
                        </span>
                    </div>
                    <p class="text-secondary mb-0">
                        คุณกำลังใช้งานในฐานะ <strong>{{ Auth::user()->name }}</strong> ({{ Auth::user()->email }}) สามารถเริ่มจัดการหรือสร้างบทความใหม่ได้ทันที
                    </p>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <a href="/author/create" class="btn btn-gradient rounded-pill px-4 py-2 fw-semibold">
                        <i class="bi bi-pencil-square me-1"></i> เขียนบทความใหม่
                    </a>
                    <a href="/author/blog" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold">
                        <i class="bi bi-collection me-1"></i> บทความทั้งหมดของฉัน
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
