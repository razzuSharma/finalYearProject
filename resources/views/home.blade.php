@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row m-3 mt-5">
            <div class="col-3">
                <div class="card">
                    <div class="card-header text-center" style="background-color:#d7d8da">
                        <div class="row">
                            <h3>Busses</h3>
                            <span class="menu-icon  mdi  mdi-bus"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>This is the body section</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-white">
                    <div class="card-header text-center" style="background-color:#d7d8da">
                        <h3 class="fw-bold">Routes</h3>
                        <i class=" menu-icon mdi mdi-routes"></i>
                    </div>
                    <div class="card-body">
                        <p class='text-center'>this is the body</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-white">
                    <div class="card-header text-center" style="background-color:#d7d8da">
                        <h3 class="fw-bold">Users</h3>
                        <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    </div>
                    <div class="card-body">
                        <p class="text-center">{{ $count }}</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card bg-white">
                    <div class="card-header text-center" style="background-color:#d7d8da">
                        <h3 class="fw-bold">Reports</h3>
                        <i class="menu-icon mdi mdi-file-document"></i>
                    </div>
                    <div class="card-body">
                        <p class="text-center">This is the body</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
