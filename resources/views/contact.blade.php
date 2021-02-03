@extends('base')
@section('main')
<section class="d-flex justify-content-center">
    <h1>contact Me</h1>
</section>
<form action="">
    <div class="row">
        <div class="col-3 first"></div>
        <div class="col-6">
            <div class="row">
                <div class="col-6 full">
                    <div class="field">
                        <label class="label" for="name">Name</label>
                        <div class="control">
                            <input type="text" name="name" class="input" required="">
                        </div>
                    </div>
                </div>
                <div class="col-6 full">
                    <div class="field">
                        <label class="label" for="email">Email</label>
                        <div class="control">
                            <input type="text" name="email" class="input" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="field">
                        <label for="message">Message</label>
                        <div class="control">
                            <textarea name="message" class="textarea" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-5"><button class="btn contact-btn btn-special"><a href="#">Contact me!</a></button></div>
                <!-- <div class="col-5"></div> -->
            </div>

        </div>
        <div class="col-3 first"></div>
    </div>
</form>

@endsection()