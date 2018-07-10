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
                    @foreach($posts as $post)
                <h1>{{$post -> title}}</h1>
                    <p>{{$post -> body}}</p>
                <a href="" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                @endforeach
            <div class="col-md-3 col-md-offset-1">
               <h2>Sidebar</h2>
            </div>
        </div>
    </div>
@endsection