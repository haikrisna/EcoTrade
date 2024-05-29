@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vendors</h1>
        <a href="{{ route('vendors.create') }}" class="btn btn-primary">Add Vendor</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendors as $vendor)
                    <tr>
                        <td>{{ $vendor->name }}</td>
                        <td>{{ $vendor->email }}</td>
                        <td>
                            <a href="{{ route('vendors.show', $vendor->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('vendors.edit', $vendor->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
