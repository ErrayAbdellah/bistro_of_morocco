@extends('dashboard')
@section('content')
@foreach ($plats as $plat)
    
<section class="card-area">
    <section class="card-section">
        <div class="card">
            <div class="flip-card">
                <div class="flip-card__container">
                    <div class="card-front">
                        <div class="card-front__tp card-front__tp--city">
                            
                            
                            <h2 class="card-front__heading">
                                {{ $plat->title }}
                            </h2>
                            <p class="card-front__text-price">
                                From £29
                            </p>
                        </div>
                        
                        <div class="card-front__bt">
                            <p class="card-front__text-view card-front__text-view--city">
                                View Plat
                            </p>
                        </div>
                    </div>
                    <div class="card-back "  style=" height:100%">
                        <img src="/images/{{$plat->image}}" height="100%" alt="">
                    </div>
                    </div>
                </div>
                
                <div class="inside-page">
                <div class="inside-page__container">
                    <h3 class="inside-page__heading inside-page__heading--city">
                        For urban lovers
                    </h3>
                    <p class="inside-page__text">
                        As cities never sleep, there are always something going on, no matter what time!
                    </p>
                    <a href="#" class="inside-page__btn inside-page__btn--city">View deals</a>
                </div>
            </div>
        </div>
    </section>
</section>
@endforeach


@endsection