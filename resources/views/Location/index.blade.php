@extends('layouts.app')

@section('content')
    <h1>Locations</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vehicle</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Timestamp</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->vehicle->name }}</td>
                    <td>{{ $location->latitude }}</td>
                    <td>{{ $location->longitude }}</td>
                    <td>{{ $location->timestamp }}</td>
                    <td>
                        <a href="{{ route('locations.show', $location) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('locations.edit', $location) }}" class="btn btn-warning">Edit</a>
                        <!-- Add delete button if needed -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('locations.create') }}" class="btn btn-success">Create New Location</a>
@endsection