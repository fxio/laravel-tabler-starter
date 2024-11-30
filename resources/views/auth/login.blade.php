<x-guest-layout>
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           placeholder="your@email.com" autocomplete="email" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            <a href="{{ route('password.request') }}">Forgot password?</a>
                        </span>
                    </label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           placeholder="Your password" required>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember"/>
                        <span class="form-check-label">Remember me</span>
                    </label>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-muted mt-3">
        Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
    </div>
</x-guest-layout>
