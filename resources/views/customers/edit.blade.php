@extends('main')

@section('title', 'Edit Details For ' . $customer->name)

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Edit Details For {{$customer->name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers/{{$customer->id}}" method="POST">
                @method('PATCH')
                @include('customers.form')
                <button type="submit" class="btn btn-primary btn-success">Save Customer</button>
            </form>
        </div>
    </div>
@endsection