@extends('layouts.app')
@section('content')
<div class="col-md-4">
    <div class="container m-3">
        <div class="card card-body mt-5">
            {{-- <h5 class="font-weight-bold">Add User:     <h3>{{ $user->name }}</h3></h5> --}}
<div class="mt-3">
    <form method="POST" action="{{ route('buses.add')}}">
        @csrf
        <label for="Name">Bus_Name</label>
        <br>
        {{-- <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
        <br>
        <input value="Update" role="button" class="btn btn-sm btm-primary" aria-pressed="true" data-toggle="button" type="submit"> --}}
        {{-- <a href="{{ route('users.update') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Update</a> --}}
    </form>
</div>
            
        </div>
    </div>
</div>

@endsection