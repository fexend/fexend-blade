@props([
    'type' => 'button', // button, underline, underline-with-icon
    'tabs' => [],
    'defaultActive' => null,
    'maxWidth' => 'max-w-2xl',
])

@php
    $defaultActive = $defaultActive ?? (count($tabs) > 0 ? $tabs[0]['id'] : '');
    $tabClasses = ['tab', $maxWidth, $type === 'underline' || $type === 'underline-with-icon' ? 'tab-bordered' : ''];
@endphp

<div class="{{ implode(' ', array_filter($tabClasses)) }}" x-data="{ activeTab: '{{ $defaultActive }}' }">
    <div class="tab-button">
        <nav aria-label="Tabs">
            @foreach ($tabs as $tab)
                @if ($type === 'button')
                    <a href="#" @click="activeTab = '{{ $tab['id'] }}'" class="button button-primary-outline" @if ($loop->first && $defaultActive === $tab['id']) aria-current="page" @endif>
                        {{ $tab['label'] }}
                    </a>
                @elseif($type === 'underline')
                    <a href="#" @click="activeTab = '{{ $tab['id'] }}'" x-bind:class="activeTab === '{{ $tab['id'] }}' ? 'active' : ''" class="tab-link">
                        {{ $tab['label'] }}
                    </a>
                @elseif($type === 'underline-with-icon')
                    <a href="#" @click="activeTab = '{{ $tab['id'] }}'" x-bind:class="activeTab === '{{ $tab['id'] }}' ? 'active' : ''" class="tab-link tab-link-icon">
                        @if (isset($tab['icon']))
                            {!! $tab['icon'] !!}
                        @endif
                        {{ $tab['label'] }}
                    </a>
                @endif
            @endforeach
        </nav>
    </div>

    <div class="tab-content">
        @foreach ($tabs as $tab)
            <div class="tab-item" x-transition x-show="activeTab === '{{ $tab['id'] }}'">
                @isset(${'tab-' . $tab['id']})
                    {{ ${'tab-' . $tab['id']} }}
                @else
                    <p>{{ $tab['label'] }} tab content</p>
                @endisset
            </div>
        @endforeach
    </div>
</div>
