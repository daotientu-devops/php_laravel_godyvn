<?php

namespace App\Http\Controllers\Auth;

use App\Core\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Auth::logout();
        $this->middleware('guest')->except('logout'); // loại trừ logout để tránh loop login
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin(Request $request)
    {
        // run the validation rules on the inputs from the form
        try {
            // validate info, create rules for the inputs
            $rules = array(
                'login_email' => 'required|email', // make sure the email in an actual email
                'login_password' => 'required|min:6' // password can only be alphanumeric and has to be greater than 3 character
            );
            $this->validate($request, $rules);
            // create user data for the authentication
            $userdata = array(
                'email' => $request->get('login_email'),
                'password' => $request->get('login_password')
            );
            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful
                return redirect('/')->with('success', 'Đăng nhập website thành công');
            } else {
                return redirect('/')->with('error', 'Tài khoản đăng nhập chưa chính xác');
            }
        } catch (\Exception $exception) {
            return redirect('/')
                ->with('error', 'Mật khẩu nhập vào quá ngắn')// send back all errors to the login form
                ->withInput($request->except('login_password')) // send back the input (not the password) so that we can repopulate
                ;
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}
