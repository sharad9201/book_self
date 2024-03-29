<div class="p-2">
    <div>
        <h1 class="text-secondary">
          Post a Category
        </h1>
    </div>

    <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Book Category</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
            @error('name')
                <div style="color: red">{{ $message }}</div>
            @enderror

        </div>
    
        {{-- <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="image">
            @error('image')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div> --}}
        <button type="submit" class="btn btn-secondary text-white">Create</button>
    </form>
</div>
    