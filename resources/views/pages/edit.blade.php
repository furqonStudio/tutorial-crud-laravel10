@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4>Edit Data {{ $item->name }}</h4>
            <a href="{{ route('people.index') }}" class="btn btn-light px-3">Cancel</a>
        </div>

        <form action="{{ route('people.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ $item->name }}">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required
                    value="{{ $item->email }}">
            </div>
            <div class="mb-3">
                <label for="phone">Phone</label>
                <input type="number" name="phone" id="phone" class="form-control" required
                    value="{{ $item->phone }}">
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="4" class="form-control">{{ $item->address }}</textarea>
            </div>
            <button class="btn btn-primary px-4" type="submit">Update</button>
        </form>
    </div>
@endsection
