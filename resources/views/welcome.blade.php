@extends('base')
@section('main')

<main class="container-fluid bg-dark text-light">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-7">
            <section class="about">
                <h1>Hey, <br> I'm <span class="orange"> Max, </span> <br> Webdeveloper. </h1>
                <div>
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
                </div> <br>
                <form action="{{url('contact')}}">
                    <input type="submit" value="Contact Me!" class="btn contact-btn" />
                    <!-- <button class="btn contact-btn">Contact Me!</button> -->
                </form>
                <a href="{{ url('contact')}}"></a>

            </section>
        </div>
        <div class="col">

        </div>
    </div>

</main>
@endsection()