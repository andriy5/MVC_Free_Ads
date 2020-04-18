@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                Results for "{{ request()->searchValue }}"
              </div>

              <div class="card-body">
                  <div>
                    <div class="row">
                      @foreach($ads as $key => $value)
                      <div class="col-4 h-100">
                        <a href="{{ route('ad.show', ['ad' => $value->id]) }}">
                          <img src="/storage/{{$value->image}}" alt="" class="w-100">
                          <div class="row justify-content-between m-1 text-dark">
                            <p>{{$value->title}}</p>
                            <p class="float-right">{{$value->price}} €</p>
                          </div>
                        </a>
                        </div> 
                      @endforeach
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection