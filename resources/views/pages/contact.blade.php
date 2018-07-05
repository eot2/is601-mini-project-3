@extends('layouts.default')

@section('content')

    <div class="container">
    <div class="card mt-3 pl-2 pr-2 pb-2">
        <div class="card title border-white"><h1>Contact</h1>
            <p class="lead">Please use this form to contact us:</p></div>
        <div class="card body border-white">
            <form role ="form" id="contact-form" class="contact-form" method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input name="email" type="email" class="form-control" autocomplete="off" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input name="subject" type="subject" autocomplete="off" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="body">Your Message:</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>

@endsection