@props([
    'title' => '',
    'time' => null,
    'description' => null,
    'color' => '',
    'icon' => null,
])

<div class="timeline-item">
    @if ($icon)
        <span class="timeline-dot-icon {{ $color ? "timeline-dot-icon-{$color}" : '' }}">
            {!! $icon !!}
        </span>
    @else
        <span class="timeline-dot {{ $color ? "timeline-dot-{$color}" : '' }}"></span>
    @endif

    <div class="timeline-content">
        <div class="timeline-title">{{ $title }}</div>
        @if ($time)
            <div class="timeline-time">{{ $time }}</div>
        @endif
        @if ($description)
            <div class="timeline-description">{{ $description }}</div>
        @elseif (isset($slot) && $slot->isNotEmpty())
            <div class="timeline-description">{{ $slot }}</div>
        @endif
    </div>
</div>
