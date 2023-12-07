@extends('layouts.master')

@section('content')
    <h1> Dejanos un mensaje </h1>

    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" id="">
        </label>
        @error('nombre')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="correo" id="">
        </label>
        @error('correo')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <br>

        <label>
            Mensaje:
            <br>
            <input type="text" name="mensaje" id="">
        </label>
        @error('mensaje')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <button type="submit"> Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif
@endsection