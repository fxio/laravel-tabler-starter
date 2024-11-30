@extends('layouts.app')

@section('header')
    <div class="row g-2 align-items-center">
        <div class="col">
            <h2 class="page-title">
                Dashboard
            </h2>
        </div>
    </div>
@endsection

@section('content')
    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Welcome to Laravel Tabler Starter</h3>
                </div>
                <div class="card-body">
                    <p>Your new application is ready.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
