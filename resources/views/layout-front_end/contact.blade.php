@extends('layout-front_end.style_home')
@section('section')
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Buffalo Basket Matinella</p>
                <h2>contattaci</h2>
            </header>
        </div>
    </section>
@endsection
@section('content')
    <div class="container">
        <form method="post" action="{{ route('contact.mail') }}">
        {{ csrf_field() }}
            <input type="number" name="price" placeholder="prezzo">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="nome">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="mariorossi@gmail.com"><br>
            <label for="description">Richiesta</label>
            <textarea placeholder="inserire il testo della richiesta" name="description"></textarea>
            <button id="submit" type="submit" class="is-centered">Invia</button>
        </form>
     </div>
@endsection
