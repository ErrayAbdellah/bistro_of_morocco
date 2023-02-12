
@extends('dashboard')

@section('title')
Edit plat
@endsection

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <form  action="{{ route('home.update', $plats->id) }}"  method="POST" enctype="multipart/form-data" class="text-center d-flex justify-content-center align-items-center" style="height: 100vh">
        @csrf
        @method('PUT')
        <div class="p-5 rounded-2" style="background-color: rgb(51, 212, 218)">
            <div class="form-group mt-3">
                <input class="form-control" type="text" name="title" id="" placeholder="" value="{{$plats->title}}">
                <span class="text-danger fw-bold">@error('title'){{$message}}
                    @enderror</span>
            </div>
            <div class="form-group mt-3">
                <input class="form-control" type="text" name="description" id="" placeholder="" value="{{$plats->description}}" >
                <span class="text-danger fw-bold">@error('description'){{$message}}
                    @enderror</span>
            </div>
            <div class="form-group mt-3">
                <input class="form-control" type="number" name="price" id="" placeholder="" value="{{$plats->price}}" >
                <span class="text-danger fw-bold">@error('price'){{$message}}
                @enderror</span>
            </div>
            <div class="form-group mt-3">
                <input type="file" name="image" class="form-control" >
                <img src="{{asset('images/'.$plats->image)}}" alt="" srcset="" class="w-25 h-25 mt-3 d-flex align-items-center">
            </div>
            <input type="submit" class="btn btn-primary">
            
        </div>
    </form>

    
@endsection
