@extends('layouts.app')
@section('content')
    <div class="col-md-6">
        <div class="row mt-4 mb-0">
            <div class="col-md-6">
                <a class="btn btn-sm btn-secondary mt-3 ms-4" href="#" role="button">Add Buses</a>
            </div>
        </div>
        <div class="table-responsive mt-4 ms-4">

            <table class="table table-bordered table-striped float-right table-condensed ml-19 caption-top">

                <thead class="thead-dark bold">

                    <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Bus Name</th>
                        <th scope="col">Bus Number</th>
                        <th scope="col">Operator</th>
                        <th scope="col">Total Seats</th>
                        <th scope="col">Status</th>
                    </tr> 
                </thead>
            </table>
        </div>
    </div>


@endsection
