@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Slobodni smještaji</h1>
        <ul>
            @foreach ($accommodations as $accommodation)
                <li>{{ $accommodation->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
