<?php /* 

<div>                            @extends ('layout')
    @yield('content')   ------<  @section ('content') Tiene que coincidir el nombre
</div>                              <div>
                                        <p>Este parrafo se inserta en donde este el yield </p>
                                    </div>
                                @endsection
 */
?>

@extends ('layout.master')
@section ('content')

    <div class="row">
        <div class="col-md-12">
               <p class="quote">Curso de Laravel</p>
        </div>
    </div>

    @foreach ($posts as $post)
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="post-title"> {{ $post ['title'] }} </h1>
                <p> {{ $post ['content'] }} </p>
                <p><a href="{{route('blog.post' , ['id' => array_search($post)])}}">Leer mas...</a></p>
            </div>
        </div>
    <hr>    
    @endforeach
    
@endsection