@extends('welcome')
 
@section('title', 'Log In')

@if (session('status'))
    <div class="alert alert-success text-center">
        {{ session('status') }}
    </div>
@endif

@section('content')
<div class="col-lg-8">
  @foreach ($posts as $item)
    <div class="row mt-4 align-self-center">
      <div class="card width: 18rem;">
        <div class="card-body">
          <h4 class="card-title display-6">{{ $item->title }}</h4>
          <p class="card-text">{{ $item->body }}</p>
          <p class="card-text">{{ $item->created_at }}</p>
          <a class="text-end" href="{{ route('posts.show', ['post'=> $item->id])}}" class="card-link">
            Read
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
@stop