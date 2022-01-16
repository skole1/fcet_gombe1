@extends('layouts.app')

@section('title')
    Add New Student
@endsection

@section('content')
    <h1 class="mt-2 text-center">Edit Student</h1>
    @if(Session::has('status'))
        <p class="text-success text-center"> {{ Session::get('status') }} </p>
    @endif
    <form action="{{ route('update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ $student->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ $student->email}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone" value="{{ $student->phone}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" id="address" cols="5" rows="5">
                {{ $student->address}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
