@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>

        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <div>{{ __('User Dashboard') }}</div>

                        <a href="{{ route('project.index') }}" class="btn btn-outline-dark text-center">Progetti</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection