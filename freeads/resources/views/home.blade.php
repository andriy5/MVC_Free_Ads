@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    🎉 You are logged in!
                    <hr>
                    <h3>My Ads</h3>
                    <a href="{{ route('ad.create') }}" class="btn btn-primary float-right">New Ad</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
