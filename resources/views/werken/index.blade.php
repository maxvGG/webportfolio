@extends('base')
@section('main')

<div class="row container-fluid">
    <div class="col-sm-12">
        <h1 class="display-3">Werken</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Blog</td>
                    <td>Image</td>
                    <td>Url</td>
                    <td>taal</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($werken ?? '' as $werk)
                <tr>
                    <td>{{$werk->id}}</td>
                    <td>{{$werk->title}}</td>
                    <td>{{$werk->blog}}</td>
                    <td>
                        <img src="storage/{{$werk->imageUrl}}" alt="" style="width: 100px;">

                    </td>
                    <td>
                        {{$werk->url}}
                    </td>
                    <td>{{$werk->taal}}</td>
                    <td>
                        <a href="{{ route('werken.show',$werk->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('werken.destroy', $werk->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form action="{{route('werken.create')}}" method="get">
        <!-- <button type="submit" class="btn btn-primary-outline" style="color: white;">create item</button> -->
        <input type="submit" value="create item" class="btn contact-btn" style="margin-right: 15px;" />
    </form>
    <form action="{{url('logout')}}" method="HEADER" id="logOutForm">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="submit" value="log out" class="btn contact-btn" />
        </div>
    </form>
</div>
@endsection