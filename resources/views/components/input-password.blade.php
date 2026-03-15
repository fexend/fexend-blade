@props([
    'name' => 'password',
    'label' => 'Password',
    'placeholder' => 'Password....',
    'required' => true,
    'validation' => true,
])

<div x-data="{
    showPassword: false,
    password: '',
    isValid: false,
    validation: {{ $validation ? 'true' : 'false' }},
    requirements: {
        length: false,
        uppercase: false,
        lowercase: false,
        number: false,
        special: false
    },
    validatePassword() {
        if (!this.validation) {
            this.isValid = true;
            return;
        }

        this.requirements.length = this.password.length >= 8;
        this.requirements.uppercase = /[A-Z]/.test(this.password);
        this.requirements.lowercase = /[a-z]/.test(this.password);
        this.requirements.number = /\d/.test(this.password);
        this.requirements.special = /[@$!%*?&]/.test(this.password);

        this.isValid = this.requirements.length &&
            this.requirements.uppercase &&
            this.requirements.lowercase &&
            this.requirements.number &&
            this.requirements.special;
    }
}" class="input-password">
    <x-input name="{{ $name }}" x-bind:type="showPassword ? 'text' : 'password'" :label="$label" placeholder="{{ $placeholder }}" :required="$required" x-model="password" x-on:input="validatePassword()" x-bind:class="password && validation ? (isValid ? 'input-valid' : 'input-error') : ''">
        <x-slot name="iconContent">
            <button type="button" class="input-password-toggle" @click="showPassword = !showPassword" :aria-label="showPassword ? 'Hide password' : 'Show password'">
                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                </svg>
                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                    <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                    <path d="M3 3l18 18" />
                </svg>
            </button>
        </x-slot>
    </x-input>

    <div x-show="password && validation" class="input-password-criteria">
        <div class="criteria-item" :class="requirements.length ? 'criteria-item-met' : ''">
            <svg x-show="requirements.length" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <svg x-show="!requirements.length" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            At least 8 characters
        </div>
        <div class="criteria-item" :class="requirements.uppercase ? 'criteria-item-met' : ''">
            <svg x-show="requirements.uppercase" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <svg x-show="!requirements.uppercase" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            At least one uppercase letter
        </div>
        <div class="criteria-item" :class="requirements.lowercase ? 'criteria-item-met' : ''">
            <svg x-show="requirements.lowercase" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <svg x-show="!requirements.lowercase" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            At least one lowercase letter
        </div>
        <div class="criteria-item" :class="requirements.number ? 'criteria-item-met' : ''">
            <svg x-show="requirements.number" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <svg x-show="!requirements.number" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            At least one number
        </div>
        <div class="criteria-item" :class="requirements.special ? 'criteria-item-met' : ''">
            <svg x-show="requirements.special" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <svg x-show="!requirements.special" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            At least one special character (@$!%*?&)
        </div>
    </div>
</div>
