@extends('layouts.app')

@section('title')
ดูบทความ
@endsection

@section('content')
<div class="container" style="max-width: 760px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bolder mb-1" style="color: #0f172a; letter-spacing: -0.5px;">
                <i class="bi bi-eye text-info me-2"></i>รายละเอียดบทความ
            </h2>
            <p class="text-muted mb-0">ดูรายละเอียดเนื้อหาบทความแบบเต็ม</p>
        </div>
        <a href="/author/blog" class="btn btn-outline-secondary rounded-pill px-3 py-2 btn-sm fw-semibold">
            <i class="bi bi-arrow-left me-1"></i> หน้ารวมบทความ
        </a>
    </div>

    <div class="premium-card p-4 p-md-5">
        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="text-muted small">
                    <i class="bi bi-calendar3 me-1"></i> {{ $blog->created_at ? $blog->created_at->format('d F Y, H:i') : '-' }}
                </span>
                @if($blog->status)
                    <span class="badge-status badge-status-published">
                        <i class="bi bi-check-circle-fill"></i> เผยแพร่
                    </span>
                @else
                    <span class="badge-status badge-status-draft">
                        <i class="bi bi-pause-circle-fill"></i> ฉบับร่าง
                    </span>
                @endif
            </div>
            <h3 class="fw-bold text-dark mb-3">{{ $blog->title }}</h3>
        </div>

        <hr class="my-4" style="opacity: 0.1;">

        <div class="mb-4">
            <label class="form-label fw-bold text-muted small text-uppercase">เนื้อหา</label>
            <div class="p-4 rounded-4 bg-light text-secondary lh-lg" style="font-size: 1.05rem;">{!! $blog->content !!}</div>
        </div>

        <div class="d-flex justify-content-end gap-2 pt-3">
            <a href="/author/edit/{{ $blog->id }}" class="btn btn-warning rounded-pill px-4 fw-semibold text-white">
                <i class="bi bi-pencil-square me-1"></i> แก้ไขบทความนี้
            </a>
            <a href="/author/blog" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
                <i class="bi bi-arrow-left me-1"></i> ย้อนกลับ
            </a>
        </div>
    </div>
</div>
@endsection
