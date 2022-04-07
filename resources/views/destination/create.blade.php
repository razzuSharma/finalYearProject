@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-6">
            <div class="card card-body mt-4 fixed">
                <form method="POST" action="/destinations/save">
                    @csrf
                    <div>
                        <button type="submit" class="btn-sm mb-3" style="background-color:#A59377">Submit</button>
                    </div>
                    <div>
                        <label for="">Destination Name</label>
                        <input type="text" name="destination_name" placeholder="Name"
                            class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="">Destination Code</label>
                        <input type="number" name="destination_code" placeholder="Address"
                            class="form-control @error('address') is-invalid @enderror" required>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="">Status</label>
                        <input type="number" name="status" placeholder="Status"
                            class="form-control @error('country') is-invalid @enderror" required>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="">City Name</label>
                        <select type="number" name="city_id" class="form-control">
                            @foreach ($city as $city)
                                <option value="{{ $city->id }}">{{ $city->city_code }}</option>
                            @endforeach
                    </div>
                    
                    <br>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
