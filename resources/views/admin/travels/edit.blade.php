@extends('layouts.app')

@section('content')

    <div class="container">
        <header class="pb-3">
            <h1><b>{{ $travel->name }}</b></h1>
        </header>

        <section id="travel-form">
            <form action="{{route('admin.travels.update', $travel)}}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="name">Travel Name</label>
                    <input class="form-control form-control-lg" type="text" placeholder="travel title" id="name" name="name" value="{{$travel->name}}" required>
                </div>
                <div class="form-group">
                    <label for="destination_city">Destination City</label>
                    <input class="form-control" type="text" placeholder="Destination City" id="destination_city" name="destination_city" value="{{$travel->destination_city}}" required>
                </div>
                <div class="form-group">
                    <label for="destination_country">Destination Country</label>
                    <input class="form-control" type="text" placeholder="Destination Country" id="destination_country" name="destination_country" value="{{$travel->destination_country}}" required>
                </div>
                <div class="form-group">
                    <label for="accomodation">Accomodation</label>
                    <input  class="form-control" type="textarea" placeholder="Accomodation" id="accomodation" name="accomodation" value="{{$travel->accomodation}}" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input class="form-control" type="text" placeholder="Price" id="price" name="price" value="{{$travel->price}}" required>
                </div>
                <div class="form-group">
                    <label for="travel_days">Travel Days</label>
                    <input class="form-control" type="text" placeholder="Travel Days" id="travel_days" name="travel_days" value="{{$travel->travel_days}}" required>
                </div>
                <div class="form-group">
                    <label for="date_departure">Departure Date</label>
                    <input class="form-control" type="text" placeholder="Departure Date" id="date_departure" name="date_departure" value="{{$travel->date_departure}}" required>
                </div>
                <div class="form-group">
                    <label for="date_return">Return Date</label>
                    <input class="form-control" type="text" placeholder="Return Date" id="date_return" name="date_return" value="{{$travel->date_return}}" required>
                </div>
                <div class="form-group">
                    <label for="airline_company">Airline Company</label>
                    <input class="form-control" type="text" placeholder="Airline Compant" id="airline_company" name="airline_company" value="{{$travel->airline_company}}" required>
                </div>
                <div class="form-group">
                    <label for="participants"> Participants number</label>
                    <input class="form-control" type="text" placeholder="Participants" id="participants" name="participants" value="{{$travel->participants}}" required>
                </div>
                <div class="form-group">
                    <label for="is_available">Availability Status</label>
                    <input class="form-control" type="text" placeholder="Availablity" id="is_available" name="is_available" value="{{$travel->is_available}}" required>
                </div>
                <div class="form-group">
                    <label for="description">New Description</label>
                    <input class="form-control" type="text" placeholder="Description" id="description" name="description" value="{{$travel->description}}" required>
                </div>

                <div class="d-flex justify-content-between pt-3">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <a href="{{route('admin.travels.index')}}" class="btn btn-toolbar"><u>Go back to Travels</u></a>
                </div>

            </form>
        </section>
    </div>
    
@endsection