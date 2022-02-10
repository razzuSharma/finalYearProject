@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-4 d-flex p-2">
            <div class="card card-body mt-4 justify-content-center">
                <form method="POST" action="/buses/save">
                    @csrf
                    <div class="mt-2">
                        <button type="submit" class="btn mb-3" style="background-color:#bebab4">Submit</button>
                    </div>
                    <div>
                        <label for="">Bus Name</label>
                        <input type="text" name="bus_name" placeholder="Name"
                            class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="">Bus Number</label>
                        <input type="text" name="bus_number" placeholder="Bus Number"
                            class="form-control @error('country') is-invalid @enderror" required>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="">Total Seats</label>
                        <input type="text" name="total_seats" placeholder="Seat Number"
                            class="form-control @error('country') is-invalid @enderror" required>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="">Bus Status</label>
                        <input type="text" name="status" placeholder="Status"
                            class="form-control @error('country') is-invalid @enderror" required>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="">Operator Number</label>
                        <select name="operator_id" id="" class="form-control">
                            @foreach ($operator as $operators)
                                <option value="{{ $operators->id }}">{{ $operators->operator_name }}</option>
                            @endforeach
                    </div>
                    

                    
                </form>
            </div>
            {{-- <div class="col-md-6 ps-2">
                <div class="card card-body mt-4 justify-content-center">
                    <form method="POST" action="/buses/save">
                        @csrf
                        <div>
                            <label for="">Operator Number</label>
                            <select name="operator_id" id="" class="form-control">
                                @foreach ($operator as $operators)
                                    <option value="{{ $operators->id }}">{{ $operators->operator_name }}</option>
                                @endforeach
                        </div>
                </div>
            </div> --}}
        </div>


    @endsection
