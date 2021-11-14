@extends('layouts.app')

@section('content')

    <div class="container">
        <header>
            <h1>Create new Travel</h1>
        </header>

        <section id="travel-form">
            <form action="{{route('admin.travels.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">New Travel Name</label>
                    <input class="form-control form-control-lg" type="text" placeholder="travel title" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="destination_city">New Destination City</label>
                    <input class="form-control" type="text" placeholder="Destination City" id="destination_city" name="destination_city">
                </div>
                <div class="form-group">
                    <label for="destination_country">New Destination Country</label>
                    <input class="form-control" type="text" placeholder="Destination Country" id="destination_country" name="destination_country">
                </div>
                <div class="form-group">
                    <label for="accomodation">New Accomodation</label>
                    <input  class="form-control" type="textarea" placeholder="Accomodation" id="accomodation" name="accomodation" >
                </div>
                <div class="form-group">
                    <label for="price">New Price</label>
                    <input class="form-control" type="text" placeholder="Price" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="travel_days">New Travel Days</label>
                    <input class="form-control" type="text" placeholder="Travel Days" id="travel_days" name="travel_days">
                </div>
                <div class="form-group">
                    <label for="date_departure">New Departure Date</label>
                    <input class="form-control" type="text" placeholder="Departure Date" id="date_departure" name="date_departure">
                </div>
                <div class="form-group">
                    <label for="date_return">New Return Date</label>
                    <input class="form-control" type="text" placeholder="Return Date" id="date_return" name="date_return">
                </div>
                <div class="form-group">
                    <label for="airline_company">New Airline Company</label>
                    <input class="form-control" type="text" placeholder="Airline Compant" id="airline_company" name="airline_company">
                </div>
                <div class="form-group">
                    <label for="participants">New Participants number</label>
                    <input class="form-control" type="text" placeholder="Participants" id="participants" name="participants">
                </div>
                <div class="form-group">
                    <label for="is_available">Availability Status</label>
                    <input class="form-control" type="text" placeholder="Availablity" id="is_available" name="is_available">
                </div>
                <div class="form-group">
                    <label for="description">New Description</label>
                    <input class="form-control" type="text" placeholder="Description" id="description" name="description">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <button type="reset" class="btn btn-secondary">Delete</button>
            </form>
        </section>
    </div>
    
@endsection