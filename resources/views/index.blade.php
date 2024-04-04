
@extends('layouts.app')

@section('content')
    <h1>Vehicles</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Driver</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->name }}</td>
                    <td>{{ $vehicle->type }}</td>
                    <td>{{ $vehicle->driver->name }}</td>
                    <td>
                        <a href="{{ route('vehicles.show', $vehicle) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('vehicles.create') }}" class="btn btn-success">Create New Vehicle</a>
@endsection