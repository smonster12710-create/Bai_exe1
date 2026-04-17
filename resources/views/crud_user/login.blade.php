@extends('dashboard')

@section('content')
    <main class="container mt-5 d-flex justify-content-center">

        <div class="border p-4" style="width: 380px;">

            <h3 class="text-center mb-4">Màn hình đăng nhập</h3>

            <form method="POST" action="{{ route('user.authUser') }}">
                @csrf

                <!-- Username -->
                <div class="row mb-3 align-items-center">
                    <label class="col-4 col-form-label">Username</label>
                    <div class="col-8">
                        <input type="text" name="email" class="form-control" required>
                    </div>
                </div>

                @if ($errors->has('email'))
                    <div class="text-danger mb-2">{{ $errors->first('email') }}</div>
                @endif

                <!-- Password -->
                <div class="row mb-3 align-items-center">
                    <label class="col-4 col-form-label">Mật khẩu</label>
                    <div class="col-8">
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>

                @if ($errors->has('password'))
                    <div class="text-danger mb-2">{{ $errors->first('password') }}</div>
                @endif

                <!-- Remember -->
                <div class="row mb-3">
                    <div class="offset-4 col-8 form-check">
                        <input type="checkbox" class="form-check-input" name="remember">
                        <label class="form-check-label">Ghi nhớ đăng nhập</label>
                    </div>
                </div>

                <!-- Action -->
                <div class="row align-items-center">
                    <div class="offset-4 col-4">
                        <a href="#" class="text-primary">Quên mật khẩu</a>
                    </div>
                    <div class="col-4 text-end">
                        <button type="submit" class="btn btn-primary">
                            Đăng nhập
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </main>
@endsection
