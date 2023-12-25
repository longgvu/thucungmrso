<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class AuthController extends Controller
{
    
    public function __invoke()
    {
        // Logic for when the controller is invoked directly
    }
public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    
    $email = $request->input('email');
    $password = $request->input('password');

    // Tìm người dùng trong cơ sở dữ liệu bằng email
    $user = User::where('email', $email)->first();
$plainPassword = 'vu123456';
$hashedPassword = Hash::make($plainPassword);
    $credentials = $request->only('email', 'password');

    if (Hash::check($plainPassword, $hashedPassword)) {
        
        Auth::login($user);

         // Lưu thông tin người dùng vào Session
    Session::put('user', $user);
    session(['user_id' => $user->id]);
    // Tiếp tục xử lý giỏ hàng, ví dụ: thêm sản phẩm vào giỏ hàng
    $productId = 1; // ID của sản phẩm
    $quantity = 1; // Số lượng sản phẩm

    // Lấy giỏ hàng từ Session (nếu đã tồn tại)
    $cart = Session::get('cart', []);

    // Thêm sản phẩm vào giỏ hàng
    $cart[$productId] = $quantity;

    // Lưu giỏ hàng vào Session
    Session::put('cart', $cart);
        return redirect()->intended('/');
    }

    return redirect()->route('login')->with('error', 'Đăng nhập không thành công');
}
}