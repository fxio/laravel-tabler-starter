<x-user-layout>

    <x-slot name="header">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Dashboard
                </h2>
            </div>
        </div>
    </div>
    </x-slot>

    <div class="row row-deck row-cards">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Welcome Back, {{ auth()->user()->name }}!</h3>
                    <p class="text-muted">Here's your account overview.</p>

                    <div class="mt-3">
                        <div class="row g-2">
                            <div class="col-auto">
                                <span class="avatar avatar-lg">{{ substr(auth()->user()->name, 0, 2) }}</span>
                            </div>
                            <div class="col">
                                <h4>{{ auth()->user()->name }}</h4>
                                <div class="text-muted">
                                    {{ auth()->user()->email }}<br>
                                    @if(auth()->user()->phone)
                                        {{ auth()->user()->phone }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Quick Actions</h3>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Update Profile</a>
                        <a href="#" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="#" class="list-group-item list-group-item-action">Notification Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
