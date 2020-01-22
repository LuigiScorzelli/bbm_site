@extends('layout-back_end.style-admin')

@section('content')
    <div class="container">

            <form method="post" action="{{ route('admin.gallery.save') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <label for="title"><h3>titolo</h3></label>
                    <input class="form-control" type="text" name="title" placeholder="inserisci un titolo" required/>


                    <label for="descriptions"><h3>inserisci il testo</h3></label>
                    <textarea class="form-control" name="descriptions" rows="8" cols="80"></textarea>

                    <label for="image">Inserisci un immagine</label>
                    <input type="file" name="image" accept="image/*">

                   <div class="box-button">
                       <button type="submit" name="button" class="btn-save">Salva</button>
                   </div>

               </form>
    </div>
@endsection
