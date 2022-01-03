@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-6">
        <div class="card card-body mt-4 fixed">
            <form method="POST" action="/operators/save">
                @csrf
                <div>
                    <label for="">Operator Name</label>
                    <input type="text" name="operator_name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="">Operator Address</label>
                    <input type="text" name="operator_address" placeholder="Address" class="form-control @error('address') is-invalid @enderror" required>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="">Operator Email</label>
                    <input type="text" name="operator_email" placeholder="Email" class="form-control @error('country') is-invalid @enderror" required>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="">Operator Phone</label>
                    <input type="text" name="operator_phone" placeholder="Phone Number" class="form-control @error('country') is-invalid @enderror" required>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="">Operator Status</label>
                    <input type="text" name="operator_status" placeholder="Status" class="form-control @error('country') is-invalid @enderror" required>
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