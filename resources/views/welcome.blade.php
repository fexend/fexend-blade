<x-main title="Custom Dashboard">
    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <x-button class="button-primary">Label</x-button>
            <x-button :link="'https://example.com'" class="button-secondary">Label</x-button>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-input :label="__('Name')" value="my value" name="name" placeholder="Your Name..." id="input-name" class="testing" required />
                <x-input type="email" :label="__('Email')" name="email" placeholder="Your Email..." id="input-email" required />
                <x-input name="username" :label="__('Username')" placeholder="Your Username..." id="input-username" required />
                <x-input type="password" :label="__('Password')" name="password" placeholder="Your Password..." id="input-password" required />

                <x-input type="password" :label="__('Password')" name="password" placeholder="Your Password..." id="input-password" icon>
                    <x-slot name="iconContent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                    </x-slot>
                </x-input>

                <x-input type="password" :label="__('Password')" name="password" placeholder="Your Password..." id="input-password" icon iconPosition="left">
                    <x-slot name="iconContent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                    </x-slot>
                </x-input>
            </div>
        </div>
    </div>
</x-main>
