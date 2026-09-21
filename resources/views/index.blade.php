@extends('layouts.app')

@section('title')
หน้าแรก
@endsection

@section('content')
<div class="container py-4">
    <!-- Hero Banner -->
    <div class="premium-card p-4 p-md-5 mb-5 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #312e81 0%, #4338ca 50%, #6366f1 100%);">
        <div class="position-absolute end-0 bottom-0 opacity-25 d-none d-lg-block" style="transform: translate(10%, 20%); pointer-events: none;">
            <i class="bi bi-feather" style="font-size: 20rem; color: white;"></i>
        </div>

        <div class="row align-items-center position-relative" style="z-index: 2;">
            <div class="col-lg-8">
                <span class="badge bg-white bg-opacity-20 text-white rounded-pill px-3 py-2 mb-3 fw-normal">
                    <i class="bi bi-stars text-warning me-1"></i> ยินดีต้อนรับสู่ WB Blog Space
                </span>
                <h1 class="display-5 fw-bolder mb-3" style="letter-spacing: -1px;">
                    แบ่งปันความคิดสร้างสรรค์ และเรื่องราวที่น่าสนใจ
                </h1>
                <p class="lead text-white-50 mb-4" style="max-width: 600px;">
                    ระบบบล็อกบทความสมัยใหม่ที่พัฒนาด้วย Laravel Framework พร้อมระบบจัดการเนื้อหาที่ปลอดภัย สวยงาม และใช้งานง่าย
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/author/blog" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-primary shadow-sm">
                        <i class="bi bi-journal-text me-2"></i> อ่านบทความทั้งหมด
                    </a>
                    @auth
                        <a href="/author/create" class="btn btn-outline-light rounded-pill px-4 py-3 fw-semibold">
                            <i class="bi bi-pencil-square me-2"></i> เขียนบทความของคุณ
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light rounded-pill px-4 py-3 fw-semibold">
                            <i class="bi bi-box-arrow-in-right me-2"></i> เข้าสู่ระบบนักเขียน
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Grid -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="premium-card p-4 h-100">
                <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center p-3 mb-3 text-primary">
                    <i class="bi bi-lightning-charge-fill fs-3"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Eloquent Model</h4>
                <p class="text-muted mb-0">
                    จัดการข้อมูลได้อย่างสะดวกรวดเร็วผ่าน Eloquent ORM รองรับ Pagination, Mass Assignment Protection และ Model Interaction
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="premium-card p-4 h-100">
                <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center p-3 mb-3 text-success">
                    <i class="bi bi-shield-check fs-3"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Route Prefix & Auth</h4>
                <p class="text-muted mb-0">
                    จัดหมวดหมู่กลุ่มเส้นทางอย่างเป็นระเบียบด้วย <code>/author</code> พร้อมระบบรักษาความปลอดภัยและการยืนยันตัวตนผู้ใช้
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="premium-card p-4 h-100">
                <div class="rounded-circle bg-danger bg-opacity-10 d-inline-flex align-items-center justify-content-center p-3 mb-3 text-danger">
                    <i class="bi bi-palette-fill fs-3"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Modern UI/UX Design</h4>
                <p class="text-muted mb-0">
                    ออกแบบหน้าเว็บอย่างพิถีพิถัน สไตล์โมเดิร์น เรียบหรู รองรับการแสดงผลบนทุกอุปกรณ์ทั้งมือถือ แท็บเล็ต และคอมพิวเตอร์
                </p>
            </div>
        </div>
    </div>
</div>
@endsection