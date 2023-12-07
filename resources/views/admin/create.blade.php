@extends('layout.admin')
@extends('partials.header')

@section('content')
@include('partials.errors')

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('admin.create') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>

                {{ csrf_field() }} {{-- seguridad de LARAVEL por ataques --}}

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection