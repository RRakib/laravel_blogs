@extends("layouts.blog")


@section("content")

    <h1 class="mt-4">Write Blogs</h1>

    <form action="{{ route("submitBlogs") }}" method="post">

        {{ csrf_field() }}

        <input type="text" name="title" class="form-control my-3" placeholder="Title" />
        <textarea type="text" name="body" class="form-control my-3" placeholder="Body"></textarea>

        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary px-4">Add</button>
            <a href="{{ route("blogs") }}" class="btn ml-2 btn-secondary">Back</a>
        </div>
    </form>

@endsection
