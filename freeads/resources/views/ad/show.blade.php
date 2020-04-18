@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                {{ $ad->title ?? "No title" }}
              </div>

              <div class="card-body">
                <img src="/storage/{{$ad->image}}" alt="" class="w-100">
                <p class="font-weight-bold">{{$ad->price}} €</p>
                <p>{{$ad->description}}</p>
                @if (Auth()->user()->id == $ad->user_id)
                <div class="row float-right mr-1">
                  <a href="{{ route('ad.edit', ['ad' => $ad->id]) }}" class="btn btn-primary mr-1">Edit</a>
                  <form method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                      Delete
                    </button>
                  </form>
                </div>
                @endif
              </div>
            </div>
        </div>
    </div>
</div>
@endsection