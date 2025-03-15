@props([
    'href' => '#',
    'title' => 'Component',
    'active' => false,
])

@if ($active)
    <li>
        <span></span>
        <a href="{{ $href }}"> {{ $title }} </a>
    </li>
@else
    <li>
        <a href="{{ $href }}">
            <span>{{ $title }}</span>
        </a>
    </li>
@endif
