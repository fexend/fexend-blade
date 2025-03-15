@props(['href' => '#', 'method' => 'GET'])

@if ($method === 'GET')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'dropdown-item']) }} role="menuitem">
        {{ $slot }}
    </a>
@else
    <form method="POST" action="{{ $href }}" class="dropdown-item">
        @csrf
        @if ($method !== 'POST')
            @method($method)
        @endif
        <button type="submit" class="w-full text-left" role="menuitem">
            {{ $slot }}
        </button>
    </form>
@endif
