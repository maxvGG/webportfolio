@extends('base')

@section('main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Toevoegen</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{route('werken.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="blog">Blog</label>
                    <input type="text" class="form-control" name="blog">
                </div>

                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" name="url">
                </div>
                <div class="form-group">
                    <label for="taal">Taal</label>
                    <input type="text" class="form-control" name="taal">
                </div>

                <div class="form-group">
                    <label for="imageUrl">image</label>
                    <input type="file" class="form-control" name="imageUrl">
                </div>
                <button type="submit" class="btn contact-btn"><a href="#">Toevoegen</a></button>
            </form>
        </div>
    </div>

</div>
@endsection