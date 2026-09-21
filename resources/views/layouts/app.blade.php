<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel')) | WB Blog Space</title>

    <!-- Google Fonts (Prompt & Plus Jakarta Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Luxury & Modern Styling -->
    <style>
        :root {
            --font-main: 'Prompt', 'Plus Jakarta Sans', sans-serif;
            --primary-gradient: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #db2777 100%);
            --secondary-gradient: linear-gradient(135deg, #3b82f6 0%, #2dd4bf 100%);
            --card-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05), 0 20px 25px -5px rgba(0, 0, 0, 0.04);
            --card-hover-shadow: 0 25px 40px -10px rgba(79, 70, 229, 0.15);
            --bg-body: #f8fafc;
        }

        body {
            font-family: var(--font-main);
            background-color: var(--bg-body);
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Glassmorphism Navbar */
        .custom-navbar {
            background: rgba(15, 23, 42, 0.92) !important;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.35rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-link {
            font-weight: 500;
            color: #cbd5e1 !important;
            padding: 8px 16px !important;
            border-radius: 8px;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }

        .nav-link:hover, .nav-link.active {
            color: #ffffff !important;
            background: rgba(255, 255, 255, 0.08);
        }

        /* Premium Buttons */
        .btn-gradient {
            background: var(--primary-gradient);
            color: white !important;
            border: none;
            box-shadow: 0 4px 14px 0 rgba(79, 70, 229, 0.35);
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px 0 rgba(79, 70, 229, 0.45);
            color: white !important;
        }

        .btn-gradient-secondary {
            background: var(--secondary-gradient);
            color: white !important;
            border: none;
            box-shadow: 0 4px 14px 0 rgba(45, 212, 191, 0.3);
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-gradient-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px 0 rgba(45, 212, 191, 0.4);
            color: white !important;
        }

        /* Cards & Surfaces */
        .premium-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .premium-card:hover {
            box-shadow: var(--card-hover-shadow);
        }

        .card-header-gradient {
            background: var(--primary-gradient);
            color: white;
            padding: 1.25rem 1.75rem;
            border-bottom: none;
            font-weight: 700;
        }

        /* Form Controls */
        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1.5px solid #e2e8f0;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
        }

        /* Table & Badges */
        .table-custom {
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .table-custom thead th {
            background: #f1f5f9;
            color: #475569;
            font-weight: 700;
            border: none;
            padding: 14px 16px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table-custom tbody tr {
            background: #ffffff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
            transition: all 0.2s ease;
        }

        .table-custom tbody tr:hover {
            background: #f8fafc;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.05);
        }

        .table-custom tbody td {
            padding: 16px;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        .table-custom tbody tr td:first-child {
            border-left: 1px solid #f1f5f9;
            border-top-left-radius: 14px;
            border-bottom-left-radius: 14px;
        }

        .table-custom tbody tr td:last-child {
            border-right: 1px solid #f1f5f9;
            border-top-right-radius: 14px;
            border-bottom-right-radius: 14px;
        }

        /* Status Badge Glow */
        .badge-status {
            padding: 8px 16px;
            border-radius: 50rem;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
            text-decoration: none !important;
        }

        .badge-status-published {
            background-color: #ecfdf5;
            color: #059669;
            border: 1px solid #a7f3d0;
        }

        .badge-status-published:hover {
            background-color: #d1fae5;
            color: #047857;
            transform: scale(1.05);
        }

        .badge-status-draft {
            background-color: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
        }

        .badge-status-draft:hover {
            background-color: #fee2e2;
            color: #b91c1c;
            transform: scale(1.05);
        }

        /* Action Buttons */
        .btn-action {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: none;
            transition: all 0.2s ease;
        }

        .btn-action:hover {
            transform: translateY(-2px);
        }

        /* Pagination Modern */
        .pagination {
            gap: 6px;
        }

        .page-item .page-link {
            border-radius: 10px !important;
            border: 1px solid #e2e8f0;
            color: #475569;
            font-weight: 600;
            padding: 8px 16px;
        }

        .page-item.active .page-link {
            background: var(--primary-gradient);
            border: none;
            color: white;
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.3);
        }

        /* Footer */
        .footer {
            margin-top: auto;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 24px 0;
            color: #64748b;
            font-size: 0.9rem;
        }

        /* Responsive Videos & Summernote iframe fix */
        .article-body iframe,
        .note-editable iframe,
        .article-body video,
        .note-editable video {
            max-width: 100% !important;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin: 1rem 0;
        }
        
        .note-video-clip {
            max-width: 100% !important;
            aspect-ratio: 16 / 9;
            height: auto !important;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark custom-navbar sticky-top py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="bi bi-feather fs-3"></i>
                    <span>WB Space</span>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ms-md-4">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                                <i class="bi bi-house-door me-1"></i> หน้าแรก
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('abouts') || request()->is('author/about') ? 'active' : '' }}" href="{{ route('abouts') }}">
                                <i class="bi bi-info-circle me-1"></i> เกี่ยวกับเรา
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('author/blog') || request()->is('blogs') ? 'active' : '' }}" href="/author/blog">
                                <i class="bi bi-journal-text me-1"></i> บทความ
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto align-items-center gap-2">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="{{ route('login') }}">
                                        <i class="bi bi-box-arrow-in-right me-1"></i> เข้าสู่ระบบ
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-gradient px-4 py-2 rounded-pill text-white" href="{{ route('register') }}">
                                        <i class="bi bi-pencil-square me-1"></i> สมัครเป็นนักเขียน
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item me-2 d-none d-md-block">
                                <a href="/author/create" class="btn btn-gradient btn-sm px-3 py-2 rounded-pill">
                                    <i class="bi bi-plus-lg me-1"></i> เขียนบทความ
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center gap-2 bg-dark bg-opacity-50 px-3 py-2 rounded-pill border border-secondary border-opacity-25" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold" style="width: 28px; height: 28px; font-size: 0.8rem;">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                    <span class="fw-semibold">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 p-2 mt-2" aria-labelledby="navbarDropdown">
                                    <div class="px-3 py-2 border-bottom mb-1">
                                        <div class="fw-bold text-dark">{{ Auth::user()->name }}</div>
                                        <small class="text-muted">{{ Auth::user()->email }}</small>
                                    </div>
                                    <a class="dropdown-item rounded-3 py-2" href="/author/create">
                                        <i class="bi bi-pencil-square me-2 text-primary"></i> เขียนบทความ
                                    </a>
                                    <a class="dropdown-item rounded-3 py-2" href="/author/blog">
                                        <i class="bi bi-collection me-2 text-success"></i> บทความของฉัน
                                    </a>
                                    <div class="dropdown-divider my-1"></div>
                                    <a class="dropdown-item rounded-3 py-2 text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 py-md-5 flex-grow-1">
            @yield('content')
        </main>

        <footer class="footer mt-auto">
            <div class="container text-center">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
                    <div class="fw-semibold text-dark">
                        <i class="bi bi-feather text-primary me-1"></i> WB Blog Space &copy; {{ date('Y') }}
                    </div>
                    <div class="text-muted small">
                        พัฒนาด้วย Laravel Framework • สัปดาห์ที่ 14
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- Summernote Lite CSS & JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            if ($('#content').length) {
                $('#content').summernote({
                    placeholder: 'เขียนเนื้อหาบทความที่นี่...',
                    tabsize: 2,
                    height: 300,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ],
                    callbacks: {
                        onPaste: function (e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                            e.preventDefault();
                            document.execCommand('insertText', false, bufferText);
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>

