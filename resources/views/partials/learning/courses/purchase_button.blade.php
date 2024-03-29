@guest
    <a
        href="{{ route("welcome") }}"
        class="btn btn-info btn-lg btn-block"
    >
        {{ __("Crear una cuenta") }}
    </a>
@else
    @can("purchaseCourse", $course)
        <a
            href="{{ route("add_course_to_cart", ["course" => $course]) }}"
            class="site-btn btn-block"
        >
            {{ __("Tomar el curso por :price", ["price" => $course->formatted_price]) }}
        </a>
    @else
    {{--  href="{{ route("courses.learn", ["course" => $course]) }}"  --}}

        <a
            href="#"
            class="site-btn btn-block"
        >
            {{ __("Ir al curso") }}
        </a>
    @endcan
@endguest
