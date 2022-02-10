@extends('layouts.app')
@section('content')
<div class="col-md-6">
    <div class="row mt-4 mb-0">
        <div class="col-md-4">
            <a class="btn btn-sm btn-secondary mt-3 ms-4" href={{ route('cities.add') }} role="button">Add City</a>
        </div>
    </div>
    <div class="table mt-4 ms-4">
        <table class="table table-bordered table-striped float-right  ml-19">
            <thead class="thead-dark bold text-center">
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">City Name</th>
                    <th scope="col">City Code</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr> 
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($cities as $city)
                <tr>
                    <td> {{ $i++ }}</td>
                    <td> {{ $city->city_code }}</td>
                    <td> {{ $city->city_name }}</td>
                    <td> {{ $city->status }}</td>
                    <td>
                        <a class="btn btn-sm btn-outline-success" href="#" role="button">Edit</a>
                        <a class="btn btn-sm btn btn-outline-danger" href="#" role="button">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection