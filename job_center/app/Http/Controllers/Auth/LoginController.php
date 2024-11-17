<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Cache\RateLimiter;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $decayMinutes;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }

    public function showformlogin(){
        return view('auth.login');
    }
    public function login(Request $request){

        $this->decayMinutes = 2;

        $request->validate([
            'name'=> 'required|string',
            'password'=>['required','string'],
            'role'=>['required','string'],

        ]);

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
        $this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);

        throw ValidationException::withMessages([
            'name' => [trans('auth.throttle', [
                'seconds' => $this->decayMinutes * 60,
                'minutes' => $this->decayMinutes,
            ])],
        ]);
       }

       $credentials = $request->only('name', 'password', 'role');
       if (Auth::attempt($credentials, $request->filled('remember'))) {
        // Xóa các lần thử đăng nhập sai khi thành công
        $this->clearLoginAttempts($request);

        // Điều hướng đến trang chính sau khi đăng nhập thành công
        return redirect()->intended('home');
       }
       return redirect()->back()->withErrors([
        'login' => 'Tên người dùng hoặc mật khẩu không đúng.',
       ])->withInput($request->except('password'));

    }
}
