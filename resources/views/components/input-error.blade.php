@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger small list-unstyled']) }}>
        @foreach ((array) $messages as $message)
            <li class="text-danger" style="color: #dc3545;">{{ $message }}</li>
        @endforeach
    </ul>
@endif
