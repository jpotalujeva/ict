@extends('welcome')

@section('content')


<!-- <div>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">You can edit your post</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route("posts.update", ["post"=> $post->id]) }}" method="PUT">
      @csrf
       <input type="hidden" name="id" value="{{Auth::user()->id}}">
      <div>
        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
        <div class="mt-2">
          <textarea id="text" name="title" type="title" value="{{$post->title}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$post->title}}</textarea>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
        <div class="mt-2">
          <textarea id="content" name="content" type="text" value="{{$post->body}}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$post->body}}</textarea>
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
      </div>
    </form>
    </p>
  </div>
</div>
</div> -->

<div class="col-lg-8">
    <section class="mb-5">
        <div class="card bg-light">
            <div class="card-body">
                <!-- Comment form-->
                <form id="create-post" action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="title"></label>
                    <textarea class="form-control" id="title"name="title" rows="3">{{$post->title}}</textarea>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="body"></label>
                    <textarea class="form-control" id="body" name="body" rows="3">{{$post->body}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="categories">Categories</label>
                    <select class="form-control choices-multiple" 
                    multiple="multiple" id="categories" name="categories">
                      @foreach ($list as $option)
                       <option value={{ $option->id }} > {{ $option->name }}</option>
                     @endforeach
                    </select>
                  </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
</div>

@stop
