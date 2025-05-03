<x-main :title="__('Profile')">

    <x-slot name="title">Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('profile')" title="Profile" active></x-breadcrumb-item>
    </x-breadcrumb>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 mt-4" x-data="{ cardOpen: 'general' }">
        <div class="card lg:col-span-8 transition-transform" x-show="cardOpen === 'general'">
            <form action="{{ route('profile.update') }}" x-data="{ alertOpen: false, isEditing: false }" method="POST">
                @csrf
                <div class="card-header flex justify-between items-center">
                    <h2 class="card-title">General Profile</h2>
                    <button type="button" class="button button-primary" x-show="!isEditing" @click="isEditing = true">
                        Edit
                    </button>
                </div>
                <div class="card-body">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <x-input type="text" name="name" value="{{ Auth::user()->name }}" label="Name" x-bind:readonly="isEditing ? false : true" required></x-input>
                        <x-input type="email" name="email" value="{{ Auth::user()->email }}" label="Email" x-bind:readonly="isEditing ? false : true" required></x-input>
                    </div>
                </div>
                <div class="card-footer" x-show="isEditing">
                    <div class="flex gap-2">
                        <button type="submit" class="button button-primary" @click="isEditing = false">
                            Save
                        </button>
                        <button type="button" class="button button-secondary" @click="isEditing = false">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card lg:col-span-8 transition-transform" x-show="cardOpen === 'resetPassword'">
            <div class="card-header">
                <h2 class="card-title">Reset Password</h2>
            </div>
            <form action="{{ route('profile.password.post') }}" method="POST">

                @csrf

                <div class="card-body">

                    <div x-data="{ showPassword: false }">
                        <x-input name="old_password" x-bind:type="showPassword ? 'text' : 'password'" label="Old Password" required placeholder="Old Password" icon>
                            <x-slot name="iconContent">
                                <div class="cursor-pointer" @click="showPassword = !showPassword">
                                    <!-- Show when password is hidden -->
                                    <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                    <!-- Show when password is visible -->
                                    <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                        <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                        <path d="M3 3l18 18" />
                                    </svg>
                                </div>
                            </x-slot>
                        </x-input>
                    </div>

                    <div x-data="{ showPassword: false }">
                        <x-input name="password" x-bind:type="showPassword ? 'text' : 'password'" label="Password" required placeholder="Password...." icon>
                            <x-slot name="iconContent">
                                <div class="cursor-pointer" @click="showPassword = !showPassword">
                                    <!-- Show when password is hidden -->
                                    <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                    <!-- Show when password is visible -->
                                    <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                        <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                        <path d="M3 3l18 18" />
                                    </svg>
                                </div>
                            </x-slot>
                        </x-input>
                    </div>

                    <div x-data="{ showPassword: false }">
                        <x-input name="password_confirmation" x-bind:type="showPassword ? 'text' : 'password'" label="Password Confirmation" required placeholder="Password Confirmation" icon>
                            <x-slot name="iconContent">
                                <div class="cursor-pointer" @click="showPassword = !showPassword">
                                    <!-- Show when password is hidden -->
                                    <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                    <!-- Show when password is visible -->
                                    <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                        <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                        <path d="M3 3l18 18" />
                                    </svg>
                                </div>
                            </x-slot>
                        </x-input>
                    </div>

                    {{-- <div class="form-group">
                        <label for="currentPassword">Current Password <span class="text-danger">*</span></label>
                        <input type="password" id="currentPassword" name="currentPassword" placeholder="Current Password" />
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password <span class="text-danger">*</span></label>
                        <input type="password" id="newPassword" name="newPassword" placeholder="New Password" />
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm New Password
                            <span class="text-danger">*</span></label>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password" />
                    </div> --}}
                </div>
                <div class="card-footer">
                    <button type="submit" class="button button-primary">
                        Change Password
                    </button>
                </div>
            </form>
        </div>
        <div class="card lg:col-span-8 transition-transform" x-show="cardOpen === 'billing'">
            <div class="card-header">
                <h2 class="card-title">Billing Profile</h2>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table>
                        <thead>
                            <td>#</td>
                            <td>Billing Number</td>
                            <td>Due Date</td>
                            <td>Status</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1234567890</td>
                                <td>12/12/2021</td>
                                <td>
                                    <div class="badge badge-success-soft">Paid</div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1234567890</td>
                                <td>12/12/2021</td>
                                <td>
                                    <div class="badge badge-success-soft">Paid</div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>1234567890</td>
                                <td>12/12/2021</td>
                                <td>
                                    <div class="badge badge-success-soft">Paid</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="lg:col-span-4">
            <div class="card">
                <div class="card-body">
                    <ul class="menu-list">
                        <li>
                            <a href="#" class="menu-list-item" @click="cardOpen = 'general'" x-bind:class="{ 'active': cardOpen === 'general' }">
                                General
                            </a>
                        </li>

                        <li>
                            <a href="#" class="menu-list-item" @click="cardOpen = 'resetPassword'" x-bind:class="{ 'active': cardOpen === 'resetPassword' }">
                                Reset Password
                            </a>
                        </li>

                        <li>
                            <a href="#" class="menu-list-item" @click="cardOpen = 'billing'" x-bind:class="{ 'active': cardOpen === 'billing' }">
                                Billing
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-main>
