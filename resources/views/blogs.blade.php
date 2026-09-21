@extends('layouts.app')

@section('title')
    บทความทั้งหมด
@endsection

@section('content')
<div class="container">
    <!-- Header Hero Section -->
    <div class="row align-items-center mb-4 pb-2">
        <div class="col-md-6 mb-3 mb-md-0">
            <h1 class="h2 fw-bolder mb-1" style="color: #0f172a; letter-spacing: -0.5px;">
                <i class="bi bi-journal-richtext text-primary me-2"></i>บทความทั้งหมด
            </h1>
            <p class="text-muted mb-0">จัดการ เผยแพร่ และตรวจสอบบทความในระบบของคุณ</p>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="/author/create" class="btn btn-gradient px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-plus-circle me-1"></i> เขียนบทความใหม่
            </a>
        </div>
    </div>

    <!-- Alert Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 mb-4 d-flex align-items-center p-3" role="alert" style="background-color: #ecfdf5; border-left: 5px solid #10b981 !important;">
            <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
            <div>
                <strong>สำเร็จ!</strong> {{ session('success') }}
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Search & Filter Card -->
    <div class="premium-card p-3 mb-4">
        <form action="/author/blog" method="GET">
            <div class="row g-2 align-items-center">
                <div class="col-md-9">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 rounded-start-pill ps-3 text-muted">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" name="search" class="form-control border-start-0 rounded-end-pill py-2" placeholder="ค้นหาชื่อบทความ หรือเนื้อหา..." value="{{ $search ?? '' }}">
                    </div>
                </div>
                <div class="col-md-3 d-flex gap-2">
                    <button class="btn btn-primary rounded-pill w-100 py-2 fw-semibold" type="submit">
                        ค้นหา
                    </button>
                    @if(!empty($search))
                        <a href="/author/blog" class="btn btn-outline-secondary rounded-pill px-3 py-2" title="ล้างการค้นหา">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>

    <!-- Blog Table Card -->
    @if(count($blogs) > 0)
        <div class="premium-card p-0 mb-4">
            <div class="table-responsive p-3">
                <table class="table table-custom align-middle m-0">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 25%;">ชื่อบทความ</th>
                            <th scope="col" style="width: 40%;">เนื้อหา</th>
                            <th scope="col" class="text-center" style="width: 15%;">สถานะ</th>
                            <th scope="col" class="text-center" style="width: 20%;">จัดการข้อมูล</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $item)
                            <tr>
                                <td>
                                    <div class="fw-bold text-dark fs-6">{{ $item->title }}</div>
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>{{ $item->created_at ? $item->created_at->format('d/m/Y H:i') : '-' }}
                                    </small>
                                </td>
                                <td>
                                    <span class="text-secondary" style="font-size: 0.92rem;">
                                        {!! Str::limit(strip_tags($item->content), 110) !!}
                                    </span>
                                </td>
                                <td class="text-center">
                                    @if($item->status)
                                        <a href="/author/change/{{ $item->id }}" class="badge-status badge-status-published" title="คลิกเพื่อเปลี่ยนเป็นฉบับร่าง">
                                            <i class="bi bi-check-circle-fill"></i> เผยแพร่
                                        </a>
                                    @else
                                        <a href="/author/change/{{ $item->id }}" class="badge-status badge-status-draft" title="คลิกเพื่อเผยแพร่">
                                            <i class="bi bi-pause-circle-fill"></i> ฉบับร่าง
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- View button -->
                                        <a href="/author/view/{{ $item->id }}" class="btn-action btn-light text-primary" title="ดูรายละเอียด">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                        <!-- Edit button -->
                                        <a href="/author/edit/{{ $item->id }}" class="btn-action btn-light text-warning" title="แก้ไขบทความ">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <!-- Delete button -->
                                        <a href="/author/delete/{{ $item->id }}" onclick="return confirm('คุณต้องการลบบทความนี้จริงหรือไม่?');" class="btn-action btn-light text-danger" title="ลบบทความ">
                                            <i class="bi bi-trash3-fill"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modern Pagination -->
        <div class="d-flex justify-content-center my-4">
            {{ $blogs->links() }}
        </div>
    @else
        <div class="premium-card text-center py-5 px-4 my-4">
            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                <i class="bi bi-file-earmark-x text-muted fs-1"></i>
            </div>
            <h4 class="fw-bold text-dark mb-2">ไม่พบข้อมูลบทความ</h4>
            @if(!empty($search))
                <p class="text-muted mb-4">ไม่พบผลลัพธ์ที่ตรงกับคำค้นหา "<span class="text-primary fw-semibold">{{ $search }}</span>"</p>
                <a href="/author/blog" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="bi bi-arrow-left me-1"></i> กลับไปหน้ารวมบทความ
                </a>
            @else
                <p class="text-muted mb-4">ยังไม่มีบทความในระบบ เริ่มต้นสร้างบทความแรกของคุณเลย!</p>
                <a href="/author/create" class="btn btn-gradient rounded-pill px-4">
                    <i class="bi bi-plus-circle me-1"></i> เริ่มเขียนบทความ
                </a>
            @endif
        </div>
    @endif
</div>
@endsection
