@extends("layouts.blog")


@section("content")

    <h1 class="mt-4">
        @if(@empty($blog))
            Write Blogs
        @else
            Update Blog
        @endif
    </h1>


    @if(@empty($blog))
        <form action="{{ route("submitBlogs") }}" method="post">
    @else
        <form action="{{ route("updateBlog", $blog["id"]) }}" method="post">
    @endif

            {{ csrf_field() }}

            <input type="text" name="title" class="form-control my-3" placeholder="Title" value="@isset($blog) {{$blog["title"]}} @endisset" />
            <textarea type="text" name="body" class="form-control my-3" placeholder="Body">@isset($blog){{$blog["body"]}} @endisset</textarea>

            <div class="d-flex align-items-center">
                @if(@empty($blog))
                    <button type="submit" class="btn btn-primary px-4">Add</button>
                @else
                    <button type="submit" class="btn btn-primary px-4">Update</button>
                @endif

                <a href="{{ route("blogs") }}" class="btn ml-2 btn-secondary">Back</a>
            </div>

        </form>

@endsection

