@extends('base')

@section('main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <!-- <form action="GET"> -->
        <h1 class="display-3">edit {{$werk->title}} </h1>
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
            <form method="post" action="{{route('werken.update', $werk->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value="{{$werk->title}}">
                </div>

                <div class="form-group">
                    <label for="blog">Blog</label>
                    <input type="text" class="form-control" name="blog" value="{{$werk->blog}}">
                </div>

                <div class="form-group">
                    <label for="imageUrl">image</label>
                    <input type="file" class="form-control" name="imageUrl" value="{{$werk->imageUrl}}">
                </div>

                <button type="submit" class="btn btn-primary-outline">Toevoegen</button>
            </form>
        </div>
        <!-- </form> -->
    </div>

</div>
@endsection