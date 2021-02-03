@extends('base')
@section('main')
<main>

    <section class="flex">
        <div class="d-flex justify-content-center">
            <h1>My work</h1>
        </div>
        <div class="gallery row">
            @foreach($werken ?? '' as $werk)
            <div class="project column col-4">
                <div class="title">
                    <div class="bold">
                        {{$werk->title}}
                    </div>
                    <div class="highlight">
                        {{$werk->taal}}
                    </div>
                </div>
                <div class="img">
                    <img loading="eager" src="storage/{{$werk->imageUrl}}" alt="portfolio">
                </div>
                <form action="{{url('/work/'. $werk->id)}}">
                    <input type="submit" value="learn more" class="btn contact-btn button" style="color: white;" />
                </form>

            </div>
            @endforeach
        </div>
    </section>
</main>

@endsection()