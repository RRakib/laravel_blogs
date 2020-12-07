@extends("layouts.blog")


@section("content")

    <h1 class="mt-4">{{ $blog["title"] }}</h1>
    <p>{{ $blog["body"] }}</p>
    <small>{{ $blog["created_at"] }}</small>
    <br />
    <a href="{{ route("blogs") }}" class="btn px-4 mt-3 btn-secondary">Back</a>

@endsection
