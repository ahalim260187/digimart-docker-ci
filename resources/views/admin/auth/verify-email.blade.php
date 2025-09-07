@extends('admin.layouts.guest')
@section('content')
@if (session('status'))
    <div>{{ session('status') }}</div>
@endif
<p>Please verify your email address by clicking the link we sent to your email.</p>
<form method="POST" action="{{ route('admin.verification.send') }}">
    @csrf
    <button type="submit">Resend Verification Email</button>
</form>
@endsection

