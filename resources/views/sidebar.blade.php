@auth
    <div class="col-lg-4">
        <!-- Search widget-->
        <div class="card mb-4">
            <div class="card-header">Search</div>
            <div class="card-body">
                <div class="input-group">
                    <form class="form-inline" action="{{ route('titleFilter') }}" method="POST">
                        @csrf
                      <div class="form-group mb-2">
                        <input class="form-control" name="title" type="text" placeholder="Enter search" aria-label="Enter search" aria-describedby="button-search" />
                      </div>
                      <button type="submit" class="btn btn-primary mb-2" id="button-search" type="button">Go!</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Categories widget-->
        <div class="card mb-4">
            <div class="card-header">Categories</div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                         <ul class="list-unstyled mb-0">
                            @foreach($list as $item)
                               <li><a href="{{ route('categoryFilter', $item->id) }}">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endauth