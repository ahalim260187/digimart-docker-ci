<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ConfirmablePasswordAdminController extends Controller
{
    public function show()
    {
        return view('admin.auth.confirm-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $admin = Auth::guard('admin')->user();

        if (! Hash::check($request->password, $admin->password)) {
            return back()->withErrors([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->passwordConfirmed();

        return redirect()->intended(route('admin.dashboard'));
    }
}

