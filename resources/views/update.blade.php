
@extends('dashboard')
@section('content')

    <form  action="{{ route('home.update', $plats->id) }}"  method="POST" enctype="multipart/form-data" class="form">
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
        <div class="form-group">
            <input type="file" name="image" class="form-control" >
            <img src="{{asset('images/'.$plats->image)}}" alt="" srcset="" class="w-25 h-25">
        </div>
        <input type="submit" class="btn btn-primary">
        
    </form>
</div>

    
@endsection
