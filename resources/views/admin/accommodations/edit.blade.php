<!-- resources/views/admin/accommodations/edit.blade.php -->

@extends('layouts.admin')

@section('content')
    <h1>Edit Accommodation</h1>
    <form action="{{ route('admin.accommodations.update', $accommodation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $accommodation->title }}" required>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $accommodation->description }}</textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $accommodation->price }}" required>
        <button type="submit">Save</button>
    </form>
@endsection
