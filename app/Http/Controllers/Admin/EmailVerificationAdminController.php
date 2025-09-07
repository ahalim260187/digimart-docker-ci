<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Notification;

class EmailVerificationAdminController extends Controller
{
    public function notice()
    {
        return view('admin.auth.verify-email');
    }

    public function verify(Request $request, $id, $hash)
    {
        $admin = Auth::guard('admin')->user();

        if (! hash_equals((string) $id, (string) $admin->getKey())) {
            return Redirect::route('admin.verification.notice')->withErrors(['email' => __('Invalid verification link.')]);
        }

        if (! hash_equals((string) $hash, sha1($admin->getEmailForVerification()))) {
            return Redirect::route('admin.verification.notice')->withErrors(['email' => __('Invalid verification link.')]);
        }

        if (! $admin->hasVerifiedEmail()) {
            $admin->markEmailAsVerified();
            event(new Verified($admin));
        }

        return redirect()->route('admin.dashboard')->with('status', __('Your email has been verified!'));
    }

    public function send(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if ($admin->hasVerifiedEmail()) {
            return redirect()->intended(route('admin.dashboard'));
        }
        $admin->sendEmailVerificationNotification();
        return back()->with('status', __('Verification link sent!'));
    }
}

