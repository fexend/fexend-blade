@props([
    'step' => 1,
    'label' => '',
    'description' => '',
    'showLine' => true,
])

<div class="stepper-item" :class="{{ $step }} > step ? 'completed' : (step === {{ $step }} ? 'active' : '')" role="listitem">
    <div class="flex flex-col items-center">
        <div class="stepper-circle">
            <svg x-show="step > {{ $step }}" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span x-show="step <= {{ $step }}">{{ $step }}</span>
        </div>
        @if ($label)
            <div class="stepper-label">{{ $label }}</div>
        @endif
        @if ($description)
            <div class="stepper-description">{{ $description }}</div>
        @endif
    </div>
    @if ($showLine)
        <div class="stepper-line" :class="step > {{ $step }} ? 'bg-primary dark:bg-primary-dark' : ''"></div>
    @endif
</div>
