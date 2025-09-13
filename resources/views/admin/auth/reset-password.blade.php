@extends('admin.layouts.app')
@section('content')
    <form method="POST" action="{{ route('admin.password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email Address -->
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $email ?? '') }}"
                required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-2">
            <label class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required autocomplete="new-password">

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-2">
            <label class="form-label">Confirm Password</label>

            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
        </div>


    </form>
@endsection
