<div class=" d-flex justify-content-around" ml-2 px-2>
    <div class="row d-flex justify-content-around">
    @foreach ($books as $book)
        {{-- <div class="flex-row"> --}}
           

                <div class="card mt-4" style="width: 20rem;">

                    {{-- <img class="card-img-top" src="{{ asset('/uploads/images/' . $post->image) }}" alt="Card image cap" style="height: 14rem;"> --}}
                    <div class="card-body ">
                        <h5 class="card-title"> {{ $book['name'] }}</h5>
    
                        <p class="card-text"> {{ \Illuminate\Support\Str::words($book->description, 10) }} </p>
                        {{-- <a href="{{ route('posts.view_more', $post->id) }}" class="btn btn-primary">View more..</a> --}}
                    </div>
                </div>
           
        {{-- </div> --}}
       
    @endforeach
</div>
</div>