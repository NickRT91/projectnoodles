@extends('layouts.main')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to Project Noodles!</h1>
                    <p class="lead">Thank-you so much for visting, this website was built using Project Noodles.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a></p>
                </div>
            </div>
        </div> <!-- End of header .row -->

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet mi vel velit placerat, id facilisis purus sagittis. Phasellus vulputate nibh ligula. Nullam luctus, nulla vitae vehicula vestibulum, dolor diam efficitur est, id rhoncus mi quam quis nulla. Nulla mollis nisl turpis, id imperdiet nisl pellentesque sed.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet mi vel velit placerat, id facilisis purus sagittis. Phasellus vulputate nibh ligula. Nullam luctus, nulla vitae vehicula vestibulum, dolor diam efficitur est, id rhoncus mi quam quis nulla. Nulla mollis nisl turpis, id imperdiet nisl pellentesque sed.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet mi vel velit placerat, id facilisis purus sagittis. Phasellus vulputate nibh ligula. Nullam luctus, nulla vitae vehicula vestibulum, dolor diam efficitur est, id rhoncus mi quam quis nulla. Nulla mollis nisl turpis, id imperdiet nisl pellentesque sed.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                    <h3>Post Title 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet mi vel velit placerat, id facilisis purus sagittis. Phasellus vulputate nibh ligula. Nullam luctus, nulla vitae vehicula vestibulum, dolor diam efficitur est, id rhoncus mi quam quis nulla. Nulla mollis nisl turpis, id imperdiet nisl pellentesque sed.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div> <!-- End of post section-->
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div> <!-- End of sidebar -->
        </div>
@stop