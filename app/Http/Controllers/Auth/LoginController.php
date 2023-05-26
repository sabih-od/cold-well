<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Traits\PHPCustomMail;

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


    use AuthenticatesUsers ,PHPCustomMail;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/temp';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    /**
     * Override login method
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function customLogin(Request $request)
    {
//        dd("IN");
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

//        dd($request);

//        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//            dd("IN");
            return redirect()->route('home')->with('success', __('Login Successfull.'));
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

//    public function forgetPassword(Request $request)
//    {
//        $this->validate($request, [
//            'password' => 'required|min:6|confirmed',
//        ]);
//    }

    public function resetPasswordEmail(Request $request)
    {
        return view('auth.passwords.email');
    }

    public function verficationEmail(Request $request)
    {

        $data = $request->all();

        $to = $data['email'];
        $from = "no-reply@coldwellservice.com";
        $subject = "Verfication Email";
        $message = "Verification Code: ";

        $this->customMail($from, $to, $subject, $message);

    }


}
