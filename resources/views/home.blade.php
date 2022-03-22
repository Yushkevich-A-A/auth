@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>id: {{ $user_id }}</div>
                    <div>e-mail: {{ $user_email }}</div>
                    <div>name: {{ $user_name }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
