@extends('layout-front_end.style_home')

@section('section')
    <section class="banner full">
        <article>
            <img src="images/slide01.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Associazione sportiva mini-basket</p>
                    <h2>Buffalo Basket Matinella</h2>
                </header>
            </div>
        </article>

        <article>
            <img src="images/slide02.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Associazione sportiva mini-basket</p>
                    <h2>Buffalo Basket Matinella</h2>
                </header>
            </div>
        </article>

        <article>
            <img src="images/slide03.jpg" alt="" />
            <div class="inner">
                <header>
                    <p>Associazione sportiva mini-basket</p>
                    <h2>Buffalo Basket Matinella</h2>
                </header>
            </div>
        </article>


    </section>
@endsection

@section('content')
    <!--	My section for description -->
    <section>
        <div class="container">
            <div class="inner">
                <div class="grid-style">
                    <div>
                        <div class="box container">
                            <div class="image fit">
                                <img id="logo" src="images/logo.jpg" alt="" />
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <h2>B.B.M. Basket</h2>
                                </header>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- One  video -->
        <section id="one" class="wrapper style2">
            <div class="inner">
                <div class="grid-style">

                    <div>
                        <div class="box">
                            <div class="image fit">
                                <iframe src="https://www.youtube.com/embed/jhufcemtooM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <h2>Prima edizione Baffalo-Street</h2>
                                </header>
                                <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                                <footer class="align-center">
                                    <a href="#" class="button alt">Learn More</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="box">
                            <div class="image fit">
                                <iframe src="https://www.youtube.com/embed/jhufcemtooM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <h2>Seconda edizione Baffalo-Street</h2>
                                </header>
                                <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                                <footer class="align-center">
                                    <a href="#" class="button alt">Learn More</a>
                                </footer>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <!-- Two jumbotron -->
        <section id="two" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                    <p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
                    <h2>Morbi maximus justo</h2>
                </header>
            </div>
        </section>

    <!-- Three  gallery -->
        <section id="three" class="wrapper style2">
            <div class="inner">
                <header class="align-center">
                    <h2>GALLERY</h2>
                </header>
                <div class="gallery">
                    <div>
                        <div class="image fit">
                            <a href="#"><img src="images/pic01.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div>
                        <div class="image fit">
                            <a href="#"><img src="images/pic02.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div>
                        <div class="image fit">
                            <a href="#"><img src="images/pic03.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div>
                        <div class="image fit">
                            <a href="#"><img src="images/pic04.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
