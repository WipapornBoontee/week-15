<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายชื่อใหม่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Noto Sans Thai', sans-serif; background-color: #f8f9fa; }
        .main-container { margin-top: 50px; margin-bottom: 50px; }
        .card { border: none; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .form-control, .form-select { border-radius: 8px; padding: 10px 15px; }
    </style>
</head>
<body>

<div class="container main-container" style="max-width: 600px;">
    
    <div class="alert alert-danger shadow-sm mb-4 d-flex align-items-center" role="alert">
        <div>
            <strong>⚠️ หมายเหตุ:</strong> หน้านี้อยู่ระหว่างการพัฒนา (ระบบฟอร์มจำลอง ยังไม่มีการบันทึกข้อมูลลงฐานข้อมูลจริง)
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-secondary mb-0">เพิ่มสมาชิกใหม่</h2>
        {{-- <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-sm fw-bold">
            ⬅️ กลับหน้าหลัก
        </a> --}}
    </div>

    <div class="card p-4">
        <form action="#" method="GET" onsubmit="alert('จำลองการส่งข้อมูลสำเร็จ (ยังไม่ลง Database)'); return false;">
            
            <div class="mb-3">
                <label class="form-label fw-semibold">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" placeholder="เช่น สมชาย ใจดี" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">อีเมล</label>
                <input type="email" class="form-control" placeholder="เช่น somchai@example.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">เบอร์โทรศัพท์</label>
                <input type="tel" class="form-control" placeholder="เช่น 081-234-5678" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">สถานะการใช้งาน</label>
                <select class="form-select">
                    <option value="active">ใช้งานอยู่ (Active)</option>
                    <option value="inactive">ระงับการใช้งาน (Inactive)</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">อัปโหลดรูปโปรไฟล์</label>
                <input type="file" class="form-control" accept="image/*">
            </div>

            <hr class="my-4">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('home') }}" class="btn btn-light px-4 fw-bold me-md-2">ยกเลิก</a>
                <button type="submit" class="btn btn-success px-4 fw-bold">💾 บันทึกข้อมูล (จำลอง)</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>