<!-- resources/views/admin/accommodations/index.blade.php -->

@extends('layouts.admin')

@section('content')
    <h1>Accommodations</h1>
    <a href="{{ route('admin.accommodations.create') }}">Add New Accommodation</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
       
            @foreach ($accommodations as $accommodation)
                <tr>
                    <td>{{ $accommodation->title }}</td>
                    <td>{{ $accommodation->description }}</td>
                    <td>{{ $accommodation->price }}</td>
                    <td>
                        <a href="{{ route('admin.accommodations.edit', $accommodation->id) }}">Edit</a>
                        <form action="{{ route('admin.accommodations.destroy', $accommodation->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
