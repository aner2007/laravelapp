@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Booking') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('booking.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="accommodation_id">{{ __('Accommodation') }}</label>
                                <select class="form-control" id="accommodation_id" name="accommodation_id">
                                    @foreach ($accommodations as $accommodation)
                                        <option value="{{ $accommodation->id }}">{{ $accommodation->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start_date">{{ __('Start Date') }}</label>
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>

                            <div class="form-group">
                                <label for="end_date">{{ __('End Date') }}</label>
                                <input type="date" class="form-control" id="end_date" name="end_date">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
