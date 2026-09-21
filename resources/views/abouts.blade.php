@extends('layouts.app')

@section('title')
เกี่ยวกับเรา
@endsection

@section('content')
<div class="container" style="max-width: 800px;">
    <div class="premium-card p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
            <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center p-3 mb-3 text-primary" style="width: 72px; height: 72px;">
                <i class="bi bi-person-badge-fill fs-2"></i>
            </div>
            <h2 class="fw-bolder text-dark mb-1">เกี่ยวกับผู้พัฒนาระบบ</h2>
            <p class="text-muted">โครงงานการพัฒนาเว็บแอปพลิเคชันด้วยเฟรมเวิร์ค Laravel</p>
        </div>

        <hr class="my-4" style="opacity: 0.1;">

        <div class="row g-3 mb-4">
            <div class="col-sm-6">
                <div class="p-3 rounded-4 bg-light">
                    <small class="text-muted text-uppercase fw-semibold d-block mb-1">ชื่อ-นามสกุล ผู้พัฒนา</small>
                    <div class="fw-bold text-dark fs-5">
                        <i class="bi bi-person-check text-primary me-2"></i>{{ $name }}
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-3 rounded-4 bg-light">
                    <small class="text-muted text-uppercase fw-semibold d-block mb-1">วันที่สร้าง / แก้ไขล่าสุด</small>
                    <div class="fw-bold text-dark fs-5">
                        <i class="bi bi-calendar-event text-success me-2"></i>{{ $date }}
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 rounded-4 border border-light bg-light bg-opacity-50">
            <h5 class="fw-bold text-dark mb-2">
                <i class="bi bi-info-circle text-primary me-2"></i>รายละเอียดโปรเจกต์
            </h5>
            <p class="text-secondary mb-0 lh-lg">
                ระบบจัดการบล็อกบทความนี้ได้รับการพัฒนาขึ้นเพื่อเป็นส่วนหนึ่งของการเรียนรู้วิชาการพัฒนาเว็บแอปพลิเคชันด้วยเฟรมเวิร์ค (สัปดาห์ที่ 13) 
                โดยนำเทคโนโลยี Eloquent Model, Mass Assignment Protection, Routing Prefixes และ Blade Template Engine มาประยุกต์ใช้งานอย่างเต็มรูปแบบ
            </p>
        </div>

        <div class="text-center mt-4 pt-2">
            <a href="/author/blog" class="btn btn-gradient rounded-pill px-4 py-2 fw-semibold">
                <i class="bi bi-journal-text me-1"></i> ไปที่หน้ารวมบทความ
            </a>
        </div>
    </div>
</div>
@endsection