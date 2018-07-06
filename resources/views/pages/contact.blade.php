@extends('main')
@section('content')
        <div class="row">
            <div class="col-md-12">
                 <h1>Contact Me</h1>
                 <hr>
                 <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" name="email" class="form-control">   
                        <hr>
                        <label for="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                        <hr>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here...
                        </textarea>
                        <hr>
                        <input type="submit" value="Send Message" class="btn btn-success">
                    </div>
                 </form>
            </div>
        </div>
@endsection