@extends('layouts.app')
@section('content')
    <div class="col-md-7">
        <div class="row mt-4 mb-0">
            <div class="col-md-4">
                <a class="btn btn-sm btn-secondary mt-3 ms-5" href="{{ route('buses.add') }}" role="button">Add Buses</a>
            </div>
        </div>
        <div class="table-responsive mt-4 ms-5">
            <table class="table table-bordered table-striped float-right table-condensed ml-19 caption-top">
                <thead class="thead-dark bold">
                    <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Bus Name</th>
                        <th scope="col">Bus Number</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Total Seats</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                    </tr>

                </thead>
                <tbody>
                    @php
                        $a = 1;
                    @endphp
                    @foreach ($bus as $buss)
                        <tr>
                            <td>{{ $a++ }}</td>
                            <td>{{ $buss->bus_name }}</td>
                            <td>{{ $buss->bus_number }}</td>
                            <td>{{ $buss->operator_id }}</td>
                            <td>{{ $buss->total_seats }}</td>
                            <td>{{ $buss->status }}</td>
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
