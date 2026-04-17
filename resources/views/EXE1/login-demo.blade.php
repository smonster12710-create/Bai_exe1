<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập demo</title>
    <link rel="stylesheet" href="{{ asset('css/login_demo.css') }}">
</head>
<body>

<div class="page">
    <div class="browser-bar">
        <div class="browser-left">
            <div class="tab">Lập trình web</div>
        </div>
        <div class="browser-right">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle active"></div>
        </div>
    </div>

    <div class="address-bar">
        <div class="nav-icons">⬅ ➜ ↻</div>
        <div class="url">http://127.0.0.1:8000/login-demo</div>
    </div>

    <div class="menu">
        <a href="#">Home</a> |
        <a href="{{ route('login.demo') }}" class="active">Đăng nhập</a> |
        <a href="#">Đăng ký</a>
    </div>

    <div class="content">
        <div class="login-box">
            <h2>Màn hình đăng nhập</h2>

            <form method="POST" action="{{ route('login.demo.submit') }}" id="loginForm">
                @csrf

                <div class="form-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        value="{{ old('username') }}"
                    >
                </div>
                @error('username')
                <div class="error-text">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                    >
                </div>
                @error('password')
                <div class="error-text">{{ $message }}</div>
                @enderror

                <div class="remember">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ghi nhớ đăng nhập</label>
                </div>

                <div class="actions">
                    <a href="#" class="forgot">Quên mật khẩu</a>
                    <button type="submit" class="btn-login">Đăng nhập</button>
                </div>

                <div class="message" id="messageBox">
                    @if(session('success'))
                        <span class="success-text">{{ session('success') }}</span>
                    @endif

                    @if(session('error'))
                        <span class="fail-text">{{ session('error') }}</span>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        Lập trình web @01/2024
    </div>
</div>

<script src="{{ asset('js/login_demo.js') }}"></script>
</body>
</html>
