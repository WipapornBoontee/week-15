@extends('layouts.app')

@section('title', 'หน้าแรกของเว็บไซต์')

@section('content')
<div class="container py-4">
    <!-- Hero Header -->
    <div class="premium-card p-4 p-md-5 mb-5 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 40%, #4338ca 100%);">
        <div class="row align-items-center position-relative" style="z-index: 2;">
            <div class="col-lg-8">
                <span class="badge bg-white bg-opacity-20 text-white rounded-pill px-3 py-2 mb-3 fw-normal">
                    <i class="bi bi-stars text-warning me-1"></i> ยินดีต้อนรับสู่ WB Blog Space
                </span>
                <h1 class="display-5 fw-bolder mb-3" style="letter-spacing: -1px;">
                    คลังรวมบทความและสาระน่ารู้
                </h1>
                <p class="lead text-white-50 mb-0" style="max-width: 600px;">
                    ติดตามอ่านบทความล่าสุดที่ผ่านการคัดสรร พร้อมตกแต่งเนื้อหาด้วย Summernote Editor
                </p>
            </div>
        </div>
    </div>

    <!-- Section Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bolder mb-1 text-dark" style="letter-spacing: -0.5px;">
                <i class="bi bi-newspaper text-primary me-2"></i>บทความล่าสุด
            </h2>
            <p class="text-muted mb-0">บทความอัปเดตใหม่ล่าสุดในระบบ</p>
        </div>
        @auth
            <a href="/author/create" class="btn btn-gradient rounded-pill px-4 py-2 fw-semibold">
                <i class="bi bi-pencil-square me-1"></i> เขียนบทความ
            </a>
        @endauth
    </div>
    <hr class="mb-5" style="opacity: 0.1;">

    <!-- Blog Posts Display -->
    @if(isset($blogs) && count($blogs) > 0)
        <div class="row g-4">
            @foreach ($blogs as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="premium-card h-100 p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 small">
                                    <i class="bi bi-calendar3 me-1"></i>{{ $item->created_at ? $item->created_at->format('d M Y') : 'ล่าสุด' }}
                                </span>
                                <span class="badge-status badge-status-published">
                                    <i class="bi bi-check-circle-fill"></i> เผยแพร่
                                </span>
                            </div>
                            <h4 class="fw-bold text-dark mb-3" style="line-height: 1.4;">
                                <a href="/detail/{{ $item->id }}" class="text-dark text-decoration-none hover-primary">
                                    {{ $item->title }}
                                </a>
                            </h4>
                            <p class="text-secondary mb-4" style="line-height: 1.7; font-size: 0.95rem;">
                                {!! Str::limit(strip_tags($item->content), 100) !!}
                            </p>
                        </div>
                        <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                            <a href="/detail/{{ $item->id }}" class="btn btn-outline-primary rounded-pill px-3 py-1 btn-sm fw-semibold">
                                อ่านเพิ่มเติม <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <small class="text-muted">
                                <i class="bi bi-clock me-1"></i>{{ $item->created_at ? $item->created_at->format('H:i น.') : '' }}
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="premium-card text-center py-5 px-4 my-4">
            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-journal-x text-muted fs-1"></i>
            </div>
            <h4 class="fw-bold text-dark mb-2">ยังไม่มีบทความที่เผยแพร่</h4>
            <p class="text-muted mb-4">ขณะนี้ยังไม่มีบทความที่เปิดให้เข้าชม หรือบทความยังอยู่ในสถานะแบบร่าง</p>
            @auth
                <a href="/author/create" class="btn btn-gradient rounded-pill px-4">
                    <i class="bi bi-plus-circle me-1"></i> เริ่มเขียนบทความแรก
                </a>
            @endauth
        </div>
    @endif
</div>
@endsection
