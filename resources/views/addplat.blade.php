<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('plats.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- @method('POST') --}}
        <input type="text" name="title" id="" placeholder="">
        <input type="text" name="description" id="" placeholder="">
        <input type="text" name="price" id="" placeholder="">
        <input type="file" name="image">
        <input type="submit">
        
    </form>
{{-- @dd($plats) --}}
    {{-- @foreach ($plats as $plat) 
        <div>
             <h1>{{$plat->title}}</h1> 
            <img src="/images/{{$plat->image}}" alt="">
        </div>
    @endforeach --}}
</body>
</html>