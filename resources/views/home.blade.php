@extends('layouts.app')

@section('content')
<div class="container">
    <header>
        <h1>Dobrodošli u Mini App</h1>
        <p>Mini aplikacija za iznajmljivanje smještaja</p>
        <div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <a href="{{ route('booking_create') }}" class="btn btn-primary">Nova rezervacija</a>
    </div>
</div>
    </header>

    <main>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rezervacije</div>

                    <div class="card-body">
                        <ul>
                        @foreach ($bookings as $booking)
                        <li>
                            {{ $booking->user->name }} - {{ $booking->start_date }} to {{ $booking->end_date }}
                            <br>
                            Smještaj: {{ $booking->accommodation->name }}
                        </li>
                    @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Mini App. Sva prava pridržana.</p>
    </footer>
</div>
@endsection
