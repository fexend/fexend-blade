@props([
    'items' => [],
    'title' => 'Menu List',
    'width' => 'w-80',
    'showIcons' => false,
    'columns' => 1,
])

<div class="card">
    <div class="card-header">
        <h2 class="card-title">{{ $title }}</h2>
    </div>
    <div class="card-body {{ $width }}">
        <ul class="menu-list">
            @foreach ($items as $item)
                <li>
                    @if (!isset($item['dropdown']) || empty($item['dropdown']))
                        <a href="{{ $item['url'] ?? '#' }}" class="menu-list-item {{ isset($item['active']) && $item['active'] ? 'active' : '' }}">
                            @if ($showIcons && isset($item['icon']))
                                <div class="menu-list-icon">
                                    {!! $item['icon'] !!}
                                    {{ $item['label'] }}
                                </div>
                            @else
                                {{ $item['label'] }}
                            @endif
                        </a>
                    @else
                        <div x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false" class="relative menu-dropdown">
                            <button class="menu-list-item menu-list-item-dropdown w-full text-left flex justify-between items-center" @click="dropdownOpen = !dropdownOpen" :class="{ 'active': {{ isset($item['active']) && $item['active'] ? 'true' : 'false' }} }">
                                @if ($showIcons && isset($item['icon']))
                                    <div class="menu-list-icon">
                                        {!! $item['icon'] !!}
                                        {{ $item['label'] }}
                                    </div>
                                @else
                                    {{ $item['label'] }}
                                @endif

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-200" x-bind:class="{ 'rotate-180': dropdownOpen }">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 10l6 6l6 -6h-12" />
                                </svg>
                            </button>

                            <div x-show="dropdownOpen" x-transition class="menu-list-nested" role="menu">
                                @foreach ($item['dropdown'] as $subItem)
                                    <x-dropdown-item :href="$subItem['url'] ?? '#'" :method="$subItem['method'] ?? 'GET'" class="{{ isset($subItem['active']) && $subItem['active'] ? 'active' : '' }}">
                                        {{ $subItem['label'] }}
                                    </x-dropdown-item>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
