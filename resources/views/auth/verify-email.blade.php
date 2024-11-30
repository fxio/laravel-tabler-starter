<x-guest-layout>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Verify your email</h2>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                    A new verification link has been sent to your email address.
                </div>
            @endif

            <div class="text-center mb-4">
                Before continuing, could you verify your email address by clicking on the link we just emailed to you?
                If you didn't receive the email, we will gladly send you another.
            </div>

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">
                        Resend Verification Email
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-link w-100">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
