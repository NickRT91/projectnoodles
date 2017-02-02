@extends('layouts.main')

@section('title')Contact &bull; {{ config('app.name') }}@stop

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label name="Email">Email:</label>
                        <input id="email" type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="Subject">Subject:</label>
                        <input id="subject" type="text" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="Message">Message:</label>
                        <textarea id="message" name="message" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="submit" value="Send Message" class="btn btn-success">

                </form>
            </div>
        </div>
@stop
