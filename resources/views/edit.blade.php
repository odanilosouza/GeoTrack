@extends('layouts.app')

@section('content')
    <h1>Edit Vehicle</h1>
    <form action="{{ route('vehicles.update', $vehicle) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $vehicle->name }}" required>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $vehicle->type }}" required>
        </div>

        <div class="form-group">
            <label for="driver_id">Driver</label>
            <select class="form-control" id="driver_id" name="driver_id" required>
                <option value="">Select a driver</option>
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->id }}" {{ $driver->id == $vehicle->driver_id ? 'selected' : '' }}>{{ $driver->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection