<?php

namespace App\Http\Controllers\Auth;

use App\Core\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Core\Models\PasswordReset;
use App\Core\Models\Customer;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        parent::__construct();
        $this->middleware('guest');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm()
    {
        return view('auth.passwords.reset');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reset(Request $request)
    {
        $passwordReset = PasswordReset::select('email')->where([['token', '=', $request->get('token')]])->first();
        if ($passwordReset) {
            Customer::updateOrCreate(array('email' => $passwordReset->email), [
                'password' => Hash::make($request->get('new_password'))
            ]);
            return redirect()->back()->with('success', 'Đặt lại mật khẩu thành công');
        } else {
            return redirect()->back()->with('error', 'Đặt lại mật khẩu thất bại');
        }
    }
}
