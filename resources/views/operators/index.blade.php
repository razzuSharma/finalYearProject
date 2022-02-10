@extends('layouts.app')
@section('content')
<div class="col-md-6">
    <div class="row mt-4 mb-0">
        <div class="col-md-4">
            <a class="btn btn-sm btn-secondary mt-3 ms-4" href={{ route('operators.add') }} role="button">Add Operators</a>
        </div>
    </div>
    <div class="table mt-4 ms-4">
        <table class="table table-bordered table-striped float-right  ml-19">
            <thead class="thead-dark bold text-center">
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Operators Name</th>
                    <th scope="col">Operator Phone</th>
                    <th scope="col">Operator Email</th>
                    <th scope="col">Operator Address</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr> 
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($operators as $operator)
                <tr>
                    <td> {{ $i++ }}</td>
                    <td> {{ $operator->operator_name }}</td>
                    <td> {{ $operator->operator_phone }}</td>
                    <td> {{ $operator->operator_email }}</td>
                    <td> {{ $operator->operator_address }}</td>
                    <td> {{ $operator->operator_status }}</td>
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