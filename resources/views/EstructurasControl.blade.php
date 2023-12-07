<?php
$posts = [
                'title' => 'Aprendiendo Laravel',
                'content' => 'Esta entrada del blog te pondrá en marcha con Laravel.'
            ]
?>
@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ $test = 50}}
            <h1>Creación de blog</h1>
            @if($test < 5)
            Hello World
            @elseif($test < 90)
                Hello 100s
            @elseif($test < 500)
                Hello 500s
            @else
                Hello People
            @endif

            @for ($i = 0; $i < 5; $i++)
                {{ $i }}
            @endfor

            @foreach($posts as $post)
                <h2>{{ $post }}</h2>
            @endforeach
            
            {{ "<script>alert('Hola mundo');</script>"}}
            {!! "<script>alert('Hola mundo');</script>" !!}

        </div>
    </div>
@endsection