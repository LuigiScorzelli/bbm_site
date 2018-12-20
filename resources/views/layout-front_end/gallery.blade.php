@extends('layout-front_end.style_home')
@section('section')
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>GALLERY</p>
                <h2>Buffalo Basket Matinella</h2>
            </header>
        </div>
    </section>
@endsection
@section('content')


    <div class="container">
        <div class="row">
            <a href="images/pic01.jpg">
                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
            </a>
            <a href="images/pic02.jpg">
                <div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
            </a>
            <a href="images/pic03.jpg">
                <div class="4u$"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
            </a>

                                    <!-- Break -->
                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                    <!-- Break -->
                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                <div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
        </div>
    </div>

@endsection
