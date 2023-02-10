
@extends('dashboard')
@section('content')

    <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data" class="w-50 text-center">
        @csrf
        
        <div class="form-group">
            <input class="form-control" type="text" name="title" id="" placeholder="" >
            <span class="text-danger fw-bold">@error('title'){{$message}}
            @enderror</span>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" id="" placeholder="" >
            <span class="text-danger fw-bold">@error('description'){{$message}}
                @enderror</span>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="price" id="" placeholder=""  >
            <span class="text-danger fw-bold">@error('price'){{$message}}
                @enderror</span>
        </div>
        <div class="form-group">
            <input type="file" name="image" class="form-control" >
        </div>
        <x-jet-button wire:click="confirmLogout" wire:loading.attr="disabled">
            {{ __('Submit') }}
        </x-jet-button>
        
    </form>
    
    @endsection

