@props([
    'style' => '', // Options: hover, striped, or empty for default
    'title' => null,
    'datatable' => false,
    'id' => 'datatable',
    'hasFilter' => false,
    'theadClass' => '', // Options: thead-dark or empty for default
])

<div class="{{ $datatable ? 'card-table' : 'card' }} mt-4" {!! $hasFilter ? "x-data=\"{ tableFilter: false }\"" : '' !!}>

    @if ($title)
        <div class="card-header">
            <h2 class="card-title">{{ $title }}</h2>
        </div>
    @endif

    @if ($datatable)
        <div class="card-content relative flex flex-wrap gap-4 justify-between items-center">
            <div class="relative flex items-center gap-4">
                @if (isset($actions))
                    {{ $actions }}
                @endif

                @if ($hasFilter)
                    <button class="button button-primary button-icon button-rounded" @click="tableFilter = !tableFilter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-horizontal">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M4 6l8 0" />
                            <path d="M16 6l4 0" />
                            <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M4 12l2 0" />
                            <path d="M10 12l10 0" />
                            <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M4 18l11 0" />
                            <path d="M19 18l1 0" />
                        </svg>
                    </button>
                @endif
            </div>

            @if (isset($search))
                {{ $search }}
            @endif
        </div>

        @if ($hasFilter)
            <div class="table-filter" x-show="tableFilter" x-transition x-collapse>
                @if (isset($filter))
                    {{ $filter }}
                @endif
            </div>
        @endif
    @endif

    <div class="{{ $datatable ? '' : 'card-body' }}">
        <div class="table-container">
            <table class="{{ $style }}" {{ $datatable ? "id={$id}" : '' }}>
                <thead class="{{ $theadClass }}">
                    @if (isset($thead))
                        {{ $thead }}
                    @endif
                </thead>

                <tbody>
                    @if (isset($tbody))
                        {{ $tbody }}
                    @endif
                </tbody>

                <tfoot>
                    @if (isset($tfoot))
                        {{ $tfoot }}
                    @endif
                </tfoot>
            </table>
        </div>
    </div>
</div>
