@extends('layout-back_end.style-admin')

@section('content')

    <div class="container">
        <form class="form-group" method="post" action="{{ route('admin.gallery.edit', ['galleries' => $galleries->id]) }}">
                    {{ csrf_field() }}


                        <label for="title">Titolo</label>
                        <input type="text" value="{{$galleries->title}}" name="title" placeholder="Inserisci il titolo" class="form-control" required>

                        <label for="descriptions">descrizione</label>
                        <textarea name="descriptions" placeholder="Inserisci il testo" rows="8" cols="80" class="form-control">{{$galleries->descriptions}}</textarea>

                        <label for="image">immagine</label>
                        <input type="image" value="{{$galleries->image}}" name="image" placeholder="Inserisci il titolo" class="form-control" required>

                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control">
                    </div>
        </form>
    </div>
@endsection
