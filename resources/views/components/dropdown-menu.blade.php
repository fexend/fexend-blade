@props([
    'align' => 'right',
    'width' => '48',
    'contentClasses' => 'dropdown',
    'buttonClass' => 'button button-primary button-group',
    'buttonText' => null,
    'iconOnly' => false,
])

<div x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false" class="relative">
    <button {{ $attributes->merge(['class' => $buttonClass]) }} @click="dropdownOpen = !dropdownOpen">
        @if (!$iconOnly)
            {{ $buttonText ?? 'Actions' }}
        @endif

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-caret-down transition-transform duration-200" x-bind:class="{ 'rotate-180': dropdownOpen }">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 10l6 6l6 -6h-12" />
        </svg>
    </button>

    <div x-show="dropdownOpen" x-transition class="{{ $contentClasses }}" role="menu" style="display: none;">
        <div class="drop-shadow-2xl">
            {{ $slot }}
        </div>
    </div>
</div>
