<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\AdminRegisterRequest;

class RegisteredAdminController extends Controller
{
    public function create()
    {
        return view('admin.auth.register');
    }

    public function store(AdminRegisterRequest $request)
    {
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('admin')->login($admin);

        return redirect()->intended(route('admin.dashboard'));
    }
}

