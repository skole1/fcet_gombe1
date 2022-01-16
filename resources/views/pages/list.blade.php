@extends('layouts.app')

@section('title')
    List | Page
@endsection
@section('content')
    <h1 class="text-center mt-4">List Items</h1>
    @if(Session::has('status'))
        <p class="text-success text-center"> {{ Session::get('status') }} </p>
    @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm pr-2">+</a>
                            <a href="{{ route('edit', $item->id )}}" class="btn btn-success btn-sm pr-2">Edit</a>

                            <form action="{{ route('delete', $item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">+</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
