@extends('layout-back_end.style-admin')

@section('content')
    <div class="container">
        <form class="form-group" method="post" action="{{ route('admin.comunications.edit', ['comunications' => $comunication->id]) }}">
                    {{ csrf_field() }}

                        <label for="title">Titolo</label>
                        <input type="text" value="{{$comunication->title}}" name="title" id="title" placeholder="Inserisci il titolo" class="form-control" required>


                        <label for="author">Autore</label>
                        <input class="form-control" type="author" value="{{ $comunication->author}}">


                        <label for="text">Autore</label>
                        <textarea name="text" placeholder="Inserisci il testo" rows="8" cols="80" class="form-control">{{$comunication->text}}</textarea>

                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control">
                    </div>
        </form>
    </div>

@endsection
