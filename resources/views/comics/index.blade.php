<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-Seed</title>
</head>
<body>
    @foreach ($comics as $comic)
        <div>
            <img src="{{$comic->cover}}" alt="{{$comic->title}}">
            <h3>{{$comic->title}}</h3>
        </div>
    @endforeach
</body>
</html>