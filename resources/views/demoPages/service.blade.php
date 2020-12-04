@extends("layouts.demo")


@section("content")
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Service Page</h1>
        @foreach($services as $key=>$service)
            <h5 class="my-4">{{ $key + 1 }}. {{ $service }}</h5>
        @endforeach
    </body>
</html>
@endsection