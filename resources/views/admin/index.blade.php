@extends('layout.admin')
@extends('partials.header')

@section('content')

    @if ( Session:: has ('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info"> {{ Session::get ('info') }}</p>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.create')}}" class="btn btn-success">Nuevo post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Post 1</strong> <a href="{{route('admin.edit' , ['id' => 1])}}">Editar</a></p>
            <p><strong>Post 2</strong> <a href="{{route('admin.edit' , ['id' => 2])}}">Editar</a></p>
            <p><strong>Post 3</strong> <a href="{{route('admin.edit' , ['id' => 3])}}">Editar</a></p>
            

        </div>
    </div>
@endsection
