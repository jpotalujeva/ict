@extends('welcome')

@section('content')

<div class="col-lg-8">
    <article>
        <header class="mb-4">
            <h1 class="fw-bolder mb-1">{{$post->title}}</h1>
            <div class="text-muted fst-italic mb-2">Posted on {{$post->created_at}}</div>
            @foreach ($post->categories as $item) 
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$item->name}}</a>
            @endforeach
        </header>
        <figure class="mb-4">
          <img class="img-fluid rounded" src="{{ asset('images/post_image.jpg') }}" alt="..." />
        </figure>
        <!-- Post content-->
        <section class="mb-5">
            <p class="fs-5 mb-4">{{$post->body}}</p>
        </section>
    </article>

    @if (Auth::user()->id == $post->user_id)
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" role="button">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
             @csrf
             @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>
        </form>
    @endif
    <section class="mb-5">
        <div class="card bg-light">
            <div class="card-body">
                <form class="mb-4" action="{{ route('comments.store') }}" method="POST">
                     @csrf
                    <textarea name="comment" class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
                @foreach ($comments as $item)
                <div class="d-flex">
                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                    <div class="ms-3">
                        <div class="fw-bold">{{ $names[$item->id] }}</div>
                        <p>{{ $item->comment }}</p>
                    </div>
                    <div class="ms-3">
                        @if ($item->user_id == Auth::user()->id)
                            <form action="{{ route('comments.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@stop