@extends('layouts.app')
@section('content')
<div class="col-md-6">
    <div class="table-responsive mt-10 m-2">
        <table class="table table-bordered table-striped float-right table-condensed ml-19 caption-top">
            <caption class="fw-bold text-black">List of users:</caption>
            <thead class="thead-dark bold">
              <tr>
                <th scope="col">S.N.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Registerd At</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $user)
                <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Edit</a>
                                </div>
                                <div class="col-md-3">
                                    <form action="{{ route('users.delete', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-outline-danger btn-sm" role="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection