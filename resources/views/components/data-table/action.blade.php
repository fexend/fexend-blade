@props(['configs', 'model'])

<x-dropdown-menu :icon-only="true" button-class="button button-primary-soft">
    @foreach ($configs as $config)
        @php
            $hasPermission = true;

            // Check permission names
            if (!empty($config['permission_names'])) {
                $hasPermission = auth()->user()->hasAnyPermission($config['permission_names']);
            }

            // Check role names
            if ($hasPermission && !empty($config['role_names'])) {
                $hasPermission = auth()->user()->hasAnyRole($config['role_names']);
            }

            // Check policy
            if ($hasPermission && !empty($config['model_policy']) && !empty($model)) {
                $action = $config['name'] === 'detail' ? 'view' : $config['name'];
                $hasPermission = auth()->user()->can($action, $model);
            }

            if (auth()->user()->hasRole('superuser')) {
                $hasPermission = true;
            }

            // Generate an ID for the dropdown item
            $dropdownId = $config['id'] ?? $config['name'] . '-' . ($model->id ?? uniqid());
        @endphp

        @if ($hasPermission)
            @if (isset($config['uses_modal']) && $config['uses_modal'] && $config['name'] === 'delete')
                <x-dropdown-item href="#" id="{{ $dropdownId }}" @click.prevent="document.dispatchEvent(new CustomEvent('show-delete-modal', {
                        detail: {
                            deleteUrl: '{{ $config['route'] }}',
                            itemName: '{{ 'this item' }}'
                        }
                    }))">
                    {{ Str::title($config['name']) }}
                </x-dropdown-item>
            @else
                <x-dropdown-item :href="$config['route']" id="{{ $dropdownId }}">
                    {{ Str::title($config['name']) }}
                </x-dropdown-item>
            @endif
        @endif
    @endforeach
</x-dropdown-menu>
