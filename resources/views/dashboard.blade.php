<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro Admin System - 2026</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* CSS độ lại Navbar chuẩn 2026 */
        body {
            background-color: #f8fafc;
            /* Nền xám xanh nhẹ cho nguyên trang bớt chói */
        }

        .modern-navbar {
            background: #ffffff !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            /* Đổ bóng nổi khối mướt rượt */
            padding: 12px 0;
        }

        .navbar-brand {
            font-weight: 800;
            color: #2563eb !important;
            /* Tone xanh chủ đạo */
            letter-spacing: 1px;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 600;
            color: #475569 !important;
            transition: all 0.3s ease;
            padding: 8px 16px !important;
            border-radius: 8px;
        }

        /* Hiệu ứng đưa chuột vô nút menu */
        .nav-link:hover {
            color: #2563eb !important;
            background-color: #eff6ff;
            transform: translateY(-1px);
        }

        /* Style riêng cho nút Đăng xuất (Màu đỏ chót cảnh báo) */
        .btn-logout {
            color: #ef4444 !important;
        }

        .btn-logout:hover {
            background-color: #fef2f2 !important;
            color: #dc2626 !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg modern-navbar mb-5 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('user.list') }}"><i class="fas fa-layer-group"></i> PRO ADMIN</a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.createUser') }}"><i class="fas fa-user-plus"></i> Đăng ký</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link btn-logout" href="{{ route('signout') }}" onclick="return confirm('Bạn có muốn thoát không?')">
                            <i class="fas fa-sign-out-alt"></i> Đăng xuất
                        </a>
                    </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>