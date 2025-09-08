@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'fw-medium small text-success']) }} style="color: #198754;">
        {{ $status }}
    </div>
@endif
