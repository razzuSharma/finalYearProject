@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-6">
        <div class="card card-body mt-4 fixed">
            <form method="POST" action="/cities/save">
                @csrf
                <div>
                    <label for="">City Name</label>
                    <input type="text" name="city_name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="">City Code</label>
                    <input type="number" name="city_code" placeholder="Address" class="form-control @error('address') is-invalid @enderror" required>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="">Status</label>
                    <input type="number" name="status" placeholder="Status" class="form-control @error('country') is-invalid @enderror" required>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn mb-3" style="background-color:#bebab4">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection