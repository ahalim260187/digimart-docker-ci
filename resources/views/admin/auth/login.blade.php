@extends('admin.layouts.master')
@section('content')
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your Admin account</h2>

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>

                <div class="mb-2">
                    <label class="form-label">
                        Password
                        <span class="form-label-description"> <a href="{{route('admin.password.request')}}">I forgot password</a> </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="password" class="form-control" required
                               autocomplete="current-password">
                        <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                              d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path
                              d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/></svg>
                    </a>
                  </span>
                    </div>
                </div>

                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" id="remember" class="form-check-input"/>
                        <span class="form-check-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                </div>
            </form>
        </div>
    </div>

@endsection
