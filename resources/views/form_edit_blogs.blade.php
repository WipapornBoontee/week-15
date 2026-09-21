@extends('layouts.app')

@section('title')
แก้ไขบทความ
@endsection

@section('content')
<div class="container" style="max-width: 760px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bolder mb-1" style="color: #0f172a; letter-spacing: -0.5px;">
                <i class="bi bi-pencil-square text-warning me-2"></i>แก้ไขบทความ
            </h2>
            <p class="text-muted mb-0">ปรับปรุงแก้ไขรายละเอียดเนื้อหาบทความเดิมของคุณ</p>
        </div>
        <a href="/author/blog" class="btn btn-outline-secondary rounded-pill px-3 py-2 btn-sm fw-semibold">
            <i class="bi bi-arrow-left me-1"></i> หน้ารวมบทความ
        </a>
    </div>

    <div class="premium-card p-4 p-md-5">
        <form action="/author/update/{{ $blog->id }}" method="POST">
            @csrf

            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="form-label fw-bold text-dark d-flex align-items-center gap-2">
                    <i class="bi bi-type-h1 text-warning"></i> ชื่อบทความ
                </label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $blog->title) }}" placeholder="กรอกชื่อบทความ (ไม่เกิน 50 ตัวอักษร)">
                @error('title')
                    <div class="invalid-feedback d-flex align-items-center gap-1 mt-2">
                        <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Content Field -->
            <div class="mb-4">
                <label for="content" class="form-label fw-bold text-dark d-flex align-items-center gap-2">
                    <i class="bi bi-card-text text-warning"></i> เนื้อหาบทความ
                </label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="7" placeholder="เขียนรายละเอียดเนื้อหาบทความของคุณที่นี่...">{{ old('content', $blog->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback d-flex align-items-center gap-1 mt-2">
                        <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Status Field -->
            <div class="mb-4">
                <label for="status" class="form-label fw-bold text-dark d-flex align-items-center gap-2">
                    <i class="bi bi-toggle-on text-warning"></i> สถานะการเผยแพร่
                </label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                    <option value="1" {{ old('status', $blog->status) == '1' ? 'selected' : '' }}>🟢 เผยแพร่ทันที (Active)</option>
                    <option value="0" {{ old('status', $blog->status) == '0' ? 'selected' : '' }}>🟡 บันทึกเป็นแบบร่าง (Draft)</option>
                </select>
                @error('status')
                    <div class="invalid-feedback d-flex align-items-center gap-1 mt-2">
                        <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                    </div>
                @enderror
            </div>

            <hr class="my-4" style="opacity: 0.1;">

            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                <a href="/author/blog" class="btn btn-outline-secondary rounded-pill px-4 py-2 w-100 w-sm-auto fw-semibold">
                    <i class="bi bi-collection me-1"></i> บทความทั้งหมด
                </a>
                <button type="submit" class="btn btn-gradient rounded-pill px-5 py-2 w-100 w-sm-auto fw-bold">
                    <i class="bi bi-check2-circle me-1"></i> อัพเดทข้อมูล
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
