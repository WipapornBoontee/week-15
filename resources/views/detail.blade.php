@extends('layouts.app')

@section('title')
{{ $blog->title }}
@endsection

@section('content')
<div class="container" style="max-width: 860px;">
    <!-- Navigation Bar / Breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/" class="btn btn-outline-secondary rounded-pill px-3 py-2 btn-sm fw-semibold">
            <i class="bi bi-arrow-left me-1"></i> กลับหน้าแรก
        </a>
        <div class="d-flex gap-2">
            @auth
                <a href="/author/edit/{{ $blog->id }}" class="btn btn-outline-warning rounded-pill px-3 py-2 btn-sm fw-semibold">
                    <i class="bi bi-pencil-square me-1"></i> แก้ไขบทความ
                </a>
            @endauth
        </div>
    </div>

    <!-- Article Content Card -->
    <article class="premium-card p-4 p-md-5 mb-5">
        <!-- Header Metadata -->
        <header class="mb-4">
            <div class="d-flex align-items-center gap-2 mb-3">
                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1">
                    <i class="bi bi-calendar3 me-1"></i> {{ $blog->created_at ? $blog->created_at->format('d F Y, H:i') : '-' }}
                </span>
                @if($blog->status)
                    <span class="badge-status badge-status-published">
                        <i class="bi bi-check-circle-fill"></i> เผยแพร่แล้ว
                    </span>
                @else
                    <span class="badge-status badge-status-draft">
                        <i class="bi bi-pause-circle-fill"></i> แบบร่าง
                    </span>
                @endif
            </div>

            <h1 class="display-6 fw-bolder text-dark mb-3" style="line-height: 1.35; letter-spacing: -0.5px;">
                {{ $blog->title }}
            </h1>
        </header>

        <hr class="my-4" style="opacity: 0.1;">

        <!-- Main Body Content: rendered using unescaped syntax {!! $blog->content !!} for Summernote HTML -->
        <div class="article-body lh-lg text-secondary" style="font-size: 1.1rem;">
            {!! $blog->content !!}
        </div>

        <hr class="my-5" style="opacity: 0.1;">

        <!-- Article Footer / Author Tag -->
        <footer class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold fs-5 shadow-sm" style="width: 48px; height: 48px;">
                    <i class="bi bi-feather"></i>
                </div>
                <div>
                    <div class="fw-bold text-dark">WB Blog Space</div>
                    <small class="text-muted">เผยแพร่เนื้อหาอย่างสร้างสรรค์</small>
                </div>
            </div>

            <div>
                <a href="/" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-house-door me-1"></i> หน้าแรก
                </a>
            </div>
        </footer>
    </article>
</div>
@endsection
