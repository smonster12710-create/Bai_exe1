<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoLoginController extends Controller
{
    public function show()
    {
        return view('EXE1.login-demo');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Vui lòng nhập username.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
        ]);

        if ($request->username === 'admin' && $request->password === '123456') {
            return back()->with('success', 'Đăng nhập thành công.');
        }

        return back()
            ->withInput()
            ->with('error', 'Sai username hoặc mật khẩu.');
    }
}
