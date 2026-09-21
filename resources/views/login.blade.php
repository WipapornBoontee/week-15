<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 10%;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            border-radius: 8px;
            padding: 10px;
        }
        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-4">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4 fw-bold text-primary">เข้าสู่ระบบ</h3>
                    
                    @if(request()->has('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ request()->query('error') }}
                        </div>
                    @endif

                    <form action="{{ url('/login-process') }}" method="POST">
                        
                        @csrf
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">ชื่อผู้ใช้ หรือ อีเมล</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="กรอกชื่อผู้ใช้ของคุณ" required autocomplete="username">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="กรอกรหัสผ่าน" required autocomplete="current-password">
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">จดจำฉันไว้</label>
                            </div>
                            <a href="#" class="text-decoration-none small">ลืมรหัสผ่าน?</a>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" name="login_btn" class="btn btn-primary fw-bold">เข้าสู่ระบบ</button>
                        </div>
                        
                    </form>

                    <div class="text-center mt-4">
                        <p class="mb-0 text-muted">ยังไม่มีบัญชีผู้ใช้? <a href="#" class="text-decoration-none">สมัครสมาชิก</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>