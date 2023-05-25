<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\PHPCustomMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class PasswordResetLinkController extends Controller
{

    use PHPCustomMail;

    /**
     * Handle an incoming password reset link request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        dd("*N");
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $is_email_send = false;
        $status = Password::sendResetLink(
            $request->only('email'),
            function ($user, $token) use (&$is_email_send) {
                $html = view('emails.reset-password-email', [
                    'link' => route('password.reset.view', [$user->email, $token]),
                ])->render();

                if ($this->customMail(
                    'no-reply@coldwellservice.com',
                    strtolower($user->email),
                    'Reset Password Link',
                    $html
                ))
                    $is_email_send = true;
            }
        );

        if ($status != Password::RESET_LINK_SENT) {
            throw ValidationException::withMessages([
                'email' => [__($status)],
            ]);
        }

        if (!$is_email_send) {
            throw ValidationException::withMessages([
                'email' => ['Email not send!'],
            ]);
        }

        return redirect()->back();
//        return response()->json(['status' => __($status)]);
    }

    public function showResetForm(Request $request, $email, $token)
    {
        $user = User::where([
            ['email', $email],
        ])->first();
        if (!is_null($user) && Password::tokenExists($user, $token)) {
//            return Inertia::render('ResetPassword', [
//                'email' => $email,
//                'token' => $token
//            ]);
//    dd($email);
            return view('auth.passwords.reset', compact('email','token'));
        }
        return abort(404);
    }
}
