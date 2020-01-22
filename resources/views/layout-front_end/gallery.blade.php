@extends('layout-front_end.style_home')
@section('section')
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Buffalo Basket Matinella</p>
                <h2>gallery</h2>
            </header>
        </div>
    </section>
@endsection
@section('content')
    <div class="container">
        <section>
            <h2 class="text-center">mini-basket</h2>
            <div class="gallery">

                @foreach ($data['galleries'] as $gallery)
                    <div class="image fit">
                        <img src="{{ asset($gallery->name) }}"  alt="image">
                    </div>
                @endforeach
                
            </div>

        </section>
    </div>
@endsection
