<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="/img/bg.jpg">
    <div class="container">
        <div class="hero-text text-white">
            <h2>{{ __("Los mejores cursos de programacion Online") }}</h2>
            <p> 
                {!!
                    __("En <span class='brand-text'>:app</span> podrás evolucionar rapido con la ayuda de los mayores expertos", ['app' => env('APP_NAME')])
                !!}
            </p>
        </div>

        @guest
            @include('partials.learning.signup_customer')
        @else
        <h2 class="welcome text-center">
            {{ __("¿Que te apetece ver hoy :user", ['user' => auth()->user()->name]) }}
        </h2>
        @endguest

    </div>
</section>
<!-- Hero section end -->
