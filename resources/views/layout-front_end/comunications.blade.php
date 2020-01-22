@extends('layout-front_end.style_home')

@section('section')
    <section>
        <section id="One" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>Buffalo Basket Matinella</p>
                    <h2>COMUNICAZIONI</h2>
                </header>
            </div>
        </section>
    </section>

@endsection

@section('content')

    <section class="wrapper style3">
    <h2>Ultime Comunicazioni</h2>
        @foreach ($data['comunications'] as $comunication)
        <!-- <section class="wrapper style2"> -->
        <div class="inner">
            <div class="grid-style items">
                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="{{ asset($comunication->image) }}" alt="">
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <h3>{{ $comunication->title}}</h3>
                                <small><i>{{ $comunication->author}}</i>{{ $comunication->created_at}}</small>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                            <footer class="align-center">
                                <a href="#" class="button special">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
        <!-- </section> -->
        @endforeach
    </section>
@endsection
