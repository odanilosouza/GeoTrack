@extends('layouts.app')

@section('content')
    <h1>Vehicle Details</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $vehicle->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $vehicle->name }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ $vehicle->type }}</td>
            </tr>
            <tr>
                <th>Driver</th>
                <td>{{ $vehicle->driver->name }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $vehicle->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $vehicle->updated_at }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('vehicles.index') }}" class="btn btn-primary">Back</a>
@endsection
