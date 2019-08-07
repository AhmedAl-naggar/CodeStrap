@extends('main')

@section('title', 'Add New Customer')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Add New Customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers/create" method="POST">
                @include('customers.form')

                <button type="submit" class="btn btn-primary btn-success">Add Customer</button>
            </form>
        </div>

    </div>
@endsection