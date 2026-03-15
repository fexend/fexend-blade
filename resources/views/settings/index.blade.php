<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('settings.index')" title="Settings" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="heading-1 mb-6">Settings</h1>

    <div class="card p-6" x-data="{ activeTab: 'profile' }">
        <!-- Tab Navigation -->
        <div class="flex gap-1 border-b border-slate-200 dark:border-slate-700 mb-6">
            <button
                @click="activeTab = 'profile'"
                :class="activeTab === 'profile'
                    ? 'border-b-2 border-primary text-primary dark:border-primary-dark dark:text-primary-dark font-medium'
                    : 'text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200'"
                class="px-4 py-2 text-sm transition-colors -mb-px"
            >Profile</button>
            <button
                @click="activeTab = 'password'"
                :class="activeTab === 'password'
                    ? 'border-b-2 border-primary text-primary dark:border-primary-dark dark:text-primary-dark font-medium'
                    : 'text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200'"
                class="px-4 py-2 text-sm transition-colors -mb-px"
            >Password</button>
            <button
                @click="activeTab = 'notifications'"
                :class="activeTab === 'notifications'
                    ? 'border-b-2 border-primary text-primary dark:border-primary-dark dark:text-primary-dark font-medium'
                    : 'text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200'"
                class="px-4 py-2 text-sm transition-colors -mb-px"
            >Notifications</button>
        </div>

        <!-- Profile Tab -->
        <div x-show="activeTab === 'profile'">
            <div class="flex items-center gap-4 mb-6">
                <img
                    src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=615fff&color=fff&size=80"
                    alt="User avatar"
                    class="w-20 h-20 rounded-full"
                />
                <div>
                    <p class="text-sm font-medium text-slate-900 dark:text-slate-100 mb-1">Profile Photo</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mb-2">JPG, GIF or PNG. Max size 2MB.</p>
                    <x-button type="button" class="button-primary button-sm">Change Avatar</x-button>
                </div>
            </div>

            <form action="{{ route('profile.update') }}" method="POST" class="space-y-4">
                @csrf
                @method('POST')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-group">
                        <x-label for="full-name">Full Name</x-label>
                        <x-input id="full-name" name="name" type="text" :value="Auth::user()->name" placeholder="Enter your full name" />
                    </div>
                    <div class="form-group">
                        <x-label for="email">Email</x-label>
                        <x-input id="email" name="email" type="email" :value="Auth::user()->email" placeholder="Enter your email" />
                    </div>
                </div>
                <div class="form-group">
                    <x-label for="bio">Bio</x-label>
                    <x-textarea id="bio" name="bio" rows="3" placeholder="Tell us a little about yourself">{{ Auth::user()->bio ?? '' }}</x-textarea>
                </div>
                <div class="form-group">
                    <x-label for="role">Role</x-label>
                    <x-input id="role" name="role" type="text" :value="Auth::user()->getRoleNames()->first() ?? 'N/A'" disabled readonly />
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Your role cannot be changed. Contact your administrator.</p>
                </div>
                <div class="pt-2">
                    <x-button type="submit" class="button-primary">Save Changes</x-button>
                </div>
            </form>
        </div>

        <!-- Password Tab -->
        <div x-show="activeTab === 'password'">
            <form action="{{ route('profile.password.post') }}" method="POST" class="space-y-4 max-w-md">
                @csrf
                <div class="form-group">
                    <x-label for="current-password">Current Password</x-label>
                    <x-input id="current-password" name="current_password" type="password" placeholder="Enter your current password" />
                </div>
                <div class="form-group">
                    <x-label for="new-password">New Password</x-label>
                    <x-input id="new-password" name="password" type="password" placeholder="Enter a new password" />
                </div>
                <div class="form-group">
                    <x-label for="confirm-password">Confirm Password</x-label>
                    <x-input id="confirm-password" name="password_confirmation" type="password" placeholder="Confirm your new password" />
                </div>
                <div class="pt-2">
                    <x-button type="submit" class="button-primary">Update Password</x-button>
                </div>
            </form>
        </div>

        <!-- Notifications Tab -->
        <div x-show="activeTab === 'notifications'">
            <div class="space-y-1">
                <div class="flex items-center justify-between py-4 border-b border-slate-100 dark:border-slate-700" x-data="{ checked: true }">
                    <div>
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Email Notifications</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Receive notifications about account activity via email.</p>
                    </div>
                    <label class="switch switch-primary" aria-label="Toggle Email Notifications">
                        <input type="checkbox" :checked="checked" @change="checked = !checked" />
                        <span></span>
                    </label>
                </div>

                <div class="flex items-center justify-between py-4 border-b border-slate-100 dark:border-slate-700" x-data="{ checked: false }">
                    <div>
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Push Notifications</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Receive push notifications on your devices.</p>
                    </div>
                    <label class="switch switch-primary" aria-label="Toggle Push Notifications">
                        <input type="checkbox" :checked="checked" @change="checked = !checked" />
                        <span></span>
                    </label>
                </div>

                <div class="flex items-center justify-between py-4 border-b border-slate-100 dark:border-slate-700" x-data="{ checked: true }">
                    <div>
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Weekly Digest</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Get a weekly summary of your account activity.</p>
                    </div>
                    <label class="switch switch-primary" aria-label="Toggle Weekly Digest">
                        <input type="checkbox" :checked="checked" @change="checked = !checked" />
                        <span></span>
                    </label>
                </div>

                <div class="flex items-center justify-between py-4 border-b border-slate-100 dark:border-slate-700" x-data="{ checked: true }">
                    <div>
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Security Alerts</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Get notified about suspicious login attempts and security events.</p>
                    </div>
                    <label class="switch switch-primary" aria-label="Toggle Security Alerts">
                        <input type="checkbox" :checked="checked" @change="checked = !checked" />
                        <span></span>
                    </label>
                </div>

                <div class="flex items-center justify-between py-4" x-data="{ checked: false }">
                    <div>
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Marketing Emails</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Receive news, product updates, and promotional offers.</p>
                    </div>
                    <label class="switch switch-primary" aria-label="Toggle Marketing Emails">
                        <input type="checkbox" :checked="checked" @change="checked = !checked" />
                        <span></span>
                    </label>
                </div>

                <div class="pt-4">
                    <x-button type="button" class="button-primary">Save Preferences</x-button>
                </div>
            </div>
        </div>
    </div>
</x-main>
