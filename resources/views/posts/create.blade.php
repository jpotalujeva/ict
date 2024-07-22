@extends('welcome')
 
@section('title', 'Log In')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<div class="col-lg-8">
  <form id="create-post" class="space-y-6" action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{Auth::user()->id}}">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="text" name="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="categories">Categories</label>
      <select class="form-control choices-multiple" 
      multiple="multiple" id="categories" name="categories">
        @foreach ($categories as $option)
         <option value={{ $option->id }} > {{ $option->name }}</option>
       @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Body</label>
      <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    <div class="form-group">
      <p></p>
      <button type="submit" class="btn btn-outline-primary">Post</button>
    </div>
  </form>
</div>

@stop
