@extends('layouts.app')

@section('title', ' Details for '. $customer->name )

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Details for {{$customer->name }}</h1>
            <a href="/customers/{{$customer->id}}/edit">Edit</a>
            .
            <form action="/customers/{{$customer->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn-danger">Delete</button>
            </form>

            <p>
                <strong>Name: </strong> {{$customer->name}}
            </p>

            <p>
                <strong>Email: </strong> {{$customer->email}}
            </p>

            <p>
                <strong>Company: </strong> {{$customer->company->name}}
            </p>


            <p>
                <strong>Activity: </strong> {{$customer->active}}
            </p>


        </div>
    </div>
@endsection