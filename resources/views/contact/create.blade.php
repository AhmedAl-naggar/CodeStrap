@extends('main')

@section('title', 'Contact Us')

@section('content')

    <h1>Contact Us</h1>
    <form action="/contact" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{old('name')}}" class="form-control" id="exampleInputName" name="name"
                   aria-describedby="nameHelp" placeholder="Enter name">
            <div class="alert-danger">{{$errors->first('name')}}</div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" value="{{old('email') }}" class="form-control" id="exampleInputEmail"
                   name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <div class="alert-danger">{{$errors->first('email')}}</div>
        </div>

        <div class="form-group">
            <label for="Message">Message</label>
            <textarea value="{{old('message') }}" class="form-control" id="message" name="message" cols="30" rows="10">
            </textarea>
            <div class="alert-danger">{{$errors->first('message')}}</div>
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
