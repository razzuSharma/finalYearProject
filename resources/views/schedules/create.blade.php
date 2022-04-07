@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="bg-primary text-wrap text-white" style="width: 9rem;">
                   Create Schedules:
                  </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <form method="POST" action="/schedules/save">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="operator_id" id=" " class="form-control">
                                            <option> Select Operator</option>
                                            @foreach ($operators as $operator)
                                                <option value="{{ $operator->operator_id }}">
                                                    {{ $operator->operator_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="bus_id" id="" class="form-control">
                                            <option> Select Bus</option>
                                            @foreach ($buses as $bus)
                                                <option value="{{ $bus->bus_id }}">{{ $bus->bus_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="city_id" id="city_id" class="form-control">
                                            <option value="0" selected="true" disabled="false"> Select City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->city_id }}">
                                                    {{ $city->city_code }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="destination_id" id="destination_id" class="form-control">
                                            <option value="0" selected="true" disabled="false"> Select Destination</option>
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination->destination_id }}">
                                                    {{ $destination->destination_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="departure_time" id="" class="form-control" type="time">
                                            <option value="0" selected="true" disabled="false"> Enter Depart Time:</option>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="departure_date" id="departure_date" class="form-control" type="date">
                                            <option value="0" selected="true" disabled="false"> Enter Depart Date:</option>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="return_time" id="return_time" class="form-control" type="time">
                                            <option value="0" selected="true" disabled="false"> Enter Return Time:</option>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="return_date" id="return_date" class="form-control" type="date">
                                            <option value="0" selected="true" disabled="false"> Enter Return Date:</option>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="pickup_point" id="pickup_point" class="form-control">
                                            <option value="0" selected="true" disabled="false"> Enter Pickup Address:</option>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="drop_point" id="drop_point" class="form-control">
                                            <option value="0" selected="true" disabled="false"> Enter Dropoff Address:</option>
                                    </div>
                                </div>
                                
                                
                                
                                

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="fare" id="fare" class="form-control">
                                            <option value="0" selected="true" disabled="false"> Enter Price:</option>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn mb-3" value="Submit" style="background-color:#bebab4">Submit</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript">
        $('#city_id').on('change', function(e) {
            var city = $(this).val();
            var destination = $('#destination_id')
                ($destination).empty();
            $.get("{{ route('showRegion') }}", {
                city_id: city
            }, function(data) {
                $.each(data, function(i, 1) {
                    $(destination_id).append($('<option/>', {
                        value: data[i].id,
                        text: data[i].destination_name
                    }));
                });
            });

        });
    </script> --}}
@endsection
