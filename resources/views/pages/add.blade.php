@extends('layouts.app')

@section('title')
    Add New Student
@endsection

@section('content')
    <h1 class="mt-2 text-center">Add New Student</h1>
    @if(Session::has('status'))
        <p class="text-danger text-center"> {{ Session::get('status') }} </p>
    @endif
    <form action="{{ route('add') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" id="address" cols="5" rows="5">
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
