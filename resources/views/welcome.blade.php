@extends('base')
@section('main')

<main class="container-fluid bg-dark text-light">
    <section class="about">
        <h1>Hey, <br> I'm <span class="orange"> Max, </span> <br> Webdeveloper. </h1>
        <!-- <h1 aria-label="Hey, I'm Max van Gorp">Hey, I'm <span class="orange">Max van Gorp</span></h1> -->
        <sub>
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">I'm</div>
                <div class="primary-word-sub__bottom">I'm</div>
            </div>
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">a</div>
                <div class="primary-word-sub__bottom">a</div>
            </div>
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">Webdeveloper</div>
                <div class="primary-word-sub__bottom">Webdeveloper</div>
            </div>
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">looking</div>
                <div class="primary-word-sub__bottom">looking</div>
            </div>
            <!-- <br> -->
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">to</div>
                <div class="primary-word-sub__bottom">to</div>
            </div>
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">create</div>
                <div class="primary-word-sub__bottom">create</div>
            </div>
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">stunning</div>
                <div class="primary-word-sub__bottom">stunning</div>
            </div>
            <div class="primary-word-sub">
                <div class="primary-word-sub__top">websites</div>
                <div class="primary-word-sub__bottom">websites</div>
            </div>
        </sub> <br>
        <button class="btn contact-btn"><a href="{{ url('contact')}}">Contact me!</a></button>
    </section>
</main>
@endsection()