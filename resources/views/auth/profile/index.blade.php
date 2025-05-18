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
                    <x-input-password :validation="false" name="old_password" label="Old Password" placeholder="Old Password...." required></x-input-password>
                    <x-input-password name="password" label="Password" placeholder="Password...." required></x-input-password>
                    <x-input-password name="password_confirmation" label="Password Confirmation" placeholder="Password Confirmation...." required></x-input-password>
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
