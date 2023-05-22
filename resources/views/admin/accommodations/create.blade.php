<!-- resources/views/admin/accommodations/create.blade.php -->

@extends('layouts.admin')

@section('content')
    <h1>Add New Accommodation</h1>
    <form action="{{ route('admin.accommodations.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>
        <button type="submit">Save</button>
    </form>
@endsection
