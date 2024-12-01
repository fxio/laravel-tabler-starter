@extends('layouts.public.app')

@section('main')
    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="card card-md">
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 3v18" /><path d="M12 14l7 -7" /><path d="M12 19l8.5 -8.5" /><path d="M12 9l4.5 -4.5" /></svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h3 class="h1">Laravel Tabler Starter</h3>
                            <div class="markdown text-muted">
                                A professional Laravel starter template with:
                                <ul>
                                    <li>Separate admin and user dashboards using Tabler theme</li>
                                    <li>Multi-authentication system (Admin & User)</li>
                                    <li>Common admin features pre-built</li>
                                    <li>Modern asset compilation with Vite</li>
                                    <li>Comprehensive documentation</li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                                <a href="https://github.com/your-username/laravel-tabler-starter" class="btn btn-link" target="_blank">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Development Setup</h3>
                    <p class="text-muted">Quick commands to get you started:</p>
                    <div class="language-bash highlighter-rouge">
                    <pre class="highlight"><code>composer install
npm install
php artisan migrate:fresh --seed
npm run dev</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Features Available</h3>
                    <ul class="list-unstyled space-y-2">
                        <li class="d-flex align-items-center">
                            <span class="badge bg-green me-2"></span>
                            <span>Multi-authentication System</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="badge bg-green me-2"></span>
                            <span>Tabler UI Integration</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="badge bg-green me-2"></span>
                            <span>Dark/Light Mode</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
