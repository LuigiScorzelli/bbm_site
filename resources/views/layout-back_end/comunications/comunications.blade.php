@extends('layout-back_end.style-admin')

@section('content')

    <div class="container">
        <div class="header">
            <div class="left">
                <h2>Indice delle comunicazioni</h2>
            </div>
            <div class="right">
                <button type="button" class="btn btn-primary">
                    <a href="{{ route('admin.comunications.create') }}">crea nuovo</a>
                </button>
            </div>
        </div>
        <table class="table">
            <thead>
                <th>title</th>
                <th>autore</th>
                <th>testo</th>
                <th>image</th>
                <th>is_active</th>
                <th>creato il:</th>
                <th>modifica</th>
                <th>cancella</th>
                <th>file pdf</th>
            </thead>
            <tbody>
                @foreach ($comunications as $comunication)
                    <tr>
                        <td>{{ $comunication->title }}</td>
                        <td>{{ $comunication->author }}</td>
                        <td>{{ $comunication->text }}</td>
                        <td>{{ $comunication->image }}</td>
                        <td>{{ $comunication->is_active }}</td>
                        <td>{{ \Carbon\Carbon::parse($comunication->created_at)->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <button type="button" class="btn btn-primary">
                                <a href="{{ route('admin.comunications.edit', ['comunication' => $comunication->id ])}}">
                                    modifica
                                </a>
                                </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <a href="{{ route('admin.comunications.delete', ['comunication' => $comunication->id ])}}">
                                    elimina
                                </a>
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
