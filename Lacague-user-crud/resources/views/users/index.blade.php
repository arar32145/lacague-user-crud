@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Users List</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create New User</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Hashed Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>  {{-- Display hashed password --}}
                <td>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
