@extends('layout-back_end.style-admin')

@section('content')

    <div class="container">
        <div class="header">
            <div class="left">
                <h2>indice della galleria immagini</h2>
            </div>
            <div class="right">
                <button class="btn btn-primary" type="button" name="button">
                    <a href="{{ route('admin.gallery.create') }}">crea nuovo</a>
                </button>
            </div>
        </div>
        
        <table class="table">
            <thead>
                <th>titolo</th>
                <th>descrizione</th>
                <th>immagine</th>
                <th>is_active</th>
                <th>creata il:</th>
                <th>modifica</th>
                <th>cancella</th>
            </thead>
            <tbody>
                @foreach ($gallerys as $gallery)
                    <tr>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->descriptions}}</td>
                        <td>{{ $gallery->image}}</td>
                        <td>{{ $gallery->is_active}}</td>
                        <td>{{ \Carbon\Carbon::parse($gallery->created_at)->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <button class="btn btn-primary" type="button" name="button">
                                <a href="{{ route('admin.gallery.edit', ['galleries' => $gallery->id]) }}">modifica</a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="button" name="button">
                                <a href="{{ route('admin.gallery.delete', ['galleries' => $gallery->id])}}">cancella</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
