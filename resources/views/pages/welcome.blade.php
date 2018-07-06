@extends('main')
@section('title','| Home')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to my Blog!</h1>
                    <p>Thank you so much for visiting. This is my test website built with Laravel. Please read my latest post!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div><!-- end of header .row -->
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h1>Post Title</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi voluptatem a magnam dolorum voluptates eveniet sint eos, ad voluptatum natus vel ea autem illum esse laboriosam atque vero iure quam!...</p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h1>Post Title</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi voluptatem a magnam dolorum voluptates eveniet sint eos, ad voluptatum natus vel ea autem illum esse laboriosam atque vero iure quam!...</p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
                <hr><div class="post">
                    <h1>Post Title</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi voluptatem a magnam dolorum voluptates eveniet sint eos, ad voluptatum natus vel ea autem illum esse laboriosam atque vero iure quam!...</p>
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
               <h2>Sidebar</h2>
            </div>
        </div>
@endsection