@extends('layout-front_end.style_home')

@section('section')
    <section>
        <section id="One" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>GALLERY</p>
                    <h2>Buffalo Basket Matinella</h2>
                </header>
            </div>
        </section>
    </section>

@endsection

@section('content')
    <div class="container">
        <section>
            <div class="left">
                <h2>Ultime Comunicazioni</h2>
                
                @foreach ($data['comunications'] as $comunication)
                    <div class="items">
                        <h3>{{ $comunication->title}}</h3>
                        <small><i>{{ $comunication->author}}</i>{{ $comunication->created_at}}</small>
                        <p>{{ $comunication->text }}<p>
                    </div>
                @endforeach

            </div>
            <div class="right">

                <ul>
                    <li><h3>Documenti</h3></li>
                </ul>

                <ul>
                    <li><h3>Comunicazioni</h3></li>
                </ul>
            </div>
            <div class="flex" style="clear: both"></div>
        </section>
    </div>
@endsection
