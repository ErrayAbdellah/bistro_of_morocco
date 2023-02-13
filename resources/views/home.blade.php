
@extends('dashboard')
@section('content')
<div>
    @auth
    @if(Auth::user()->role)
        <div class="d-flex justify-content-end mt-3">
            <a href="{{route('home.create')}}" class="btn btn-primary" > add plat</a>
        </div>
    @endif
    @endauth
    <main class="d-flex justify-content-around flex-wrap " style="width: 90%">
    @foreach ($plats as $plat)
    <section class="card-area mt-5 pt-5 my-4">
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--city"> 
                                <h2 class="card-front__heading">
                                {{ $plat->title }}
                            </h2>
                        </div>
                        
                        <div class="card-front__bt">
                            <p class="card-front__text-view card-front__text-view--city">
                                View Plat
                            </p>
                        </div>
                    </div>
                    <div class="card-back " >
                        <img src="/images/{{$plat->image}}" alt="" class=" mt-5">
                    </div>
                </div>
            </div>
            
            <div class="inside-page">
                <div class="inside-page__container">
                    <h3 class="inside-page__heading inside-page__heading--city">
                        {{ $plat->title }}
                    </h3>
                    <p class="inside-page__text">
                        {{$plat->description}}
                    </p>
                    <div class="inside-page__btn inside-page__btn--city ">{{$plat->price."MAD"}}</div>
                    @auth
                    @if(Auth::user()->role)
                    <div class="mt-1 d-flex">
                        <a href='{{ route("home.edit", $plat->id) }}' class="btn btn-info class="mb-5">Update</a>
                        <form action="{{ route("home.destroy",$plat->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="btn btn-danger "class="mb-5 ms-2" value="Delete" style="background-color: brown">
                        </form>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </section>
</section>
@endforeach
</main>
</div>


@endsection