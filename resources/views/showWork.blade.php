@extends('base')
@section('main')
<section class="main">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-5">
                    <img src="../storage/{{$werken->imageUrl}}" alt="portfolio img" id="img" style="max-width: 100%;">
                </div>
                <div class="col-md-7">
                    <p class="text-left">
                        {{$werken->blog}}
                    </p>
                    @if($werken->url != '')
                    <!-- <button><a href="{{$werken->url}}">find out more</a></button> -->
                    <button class="btn contact-btn"><a href="{{$werken->url}}">github</a></button>
                    @endif
                </div>
            </div>

        </div>
        <!-- <div class="col-md-4"></div> -->
    </div>
</section>
@endsection