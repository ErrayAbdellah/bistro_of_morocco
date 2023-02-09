<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="w-50 m-auto text-center text-secondary mt-5">

    
    {{-- <form action="{{route('home.update')}}" method="post" enctype="multipart/form-data"> --}}
    <form  action="{{ route('home.update', $plats->id) }}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input class="form-control" type="text" name="title" id="" placeholder="" value="{{$plats->title}}">
            <span class="text-danger fw-bold">@error('title'){{$message}}
            @enderror</span>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" id="" placeholder="" value="{{$plats->description}}" >
            <span class="text-danger fw-bold">@error('description'){{$message}}
                @enderror</span>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="price" id="" placeholder="" value="{{$plats->price}}" >
            <span class="text-danger fw-bold">@error('price'){{$message}}
                @enderror</span>
        </div>
        {{-- <input type="file" name="image" value="{{$plats->image}}" > --}}
        <div class="form-group">
            {{-- <input type="file" name="image" class="form-control"  value="{{$plats->image}}" > --}}
            <input type="file" name="image" class="form-control" >
            <img src="{{asset('images/'.$plats->image)}}" alt="" srcset="" class="w-25 h-25">
        </div>
        <input type="submit">
        
    </form>
</div>
{{-- @dd($plats) --}}
    {{-- @foreach ($plats as $plat) 
        <div>
             <h1>{{$plat->title}}</h1> 
            <img src="/images/{{$plat->image}}" alt="">
        </div>
    @endforeach --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>