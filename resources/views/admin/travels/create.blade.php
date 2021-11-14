@extends('layouts.app')

@section('content')

    <div class="container">
        <header class="pb-3">
            <h1><b>Create New Travel</b></h1>
        </header>

        <section id="travel-form">
            <form action="{{route('admin.travels.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">New Travel Name</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Name" id="name" name="name">
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
                    <input class="form-control" type="text" placeholder="Days" id="travel_days" name="travel_days">
                </div>
                <div class="form-group">
                    <label for="date_departure">New Departure Date</label>
                    <input class="form-control" type="text" placeholder="Departure Date (Y-m-d)" id="date_departure" name="date_departure">
                </div>
                <div class="form-group">
                    <label for="date_return">New Return Date</label>
                    <input class="form-control" type="text" placeholder="Return Date (Y-m-d)" id="date_return" name="date_return">
                </div>
                <div class="form-group">
                    <label for="airline_company">New Airline Company</label>
                    <input class="form-control" type="text" placeholder="Airline Company" id="airline_company" name="airline_company">
                </div>
                <div class="form-group">
                    <label for="participants">New Participants number</label>
                    <input class="form-control" type="text" placeholder="Participants" id="participants" name="participants">
                </div>
                <div class="form-group">
                    <label for="is_available">Availability Status</label>
                    <input class="form-control" type="text" placeholder="Availablity (1=yes, 0=no)" id="is_available" name="is_available">
                </div>
                <div class="form-group">
                    <label for="description">New Description</label>
                    <input class="form-control" type="text" placeholder="Description" id="description" name="description">
                </div>

                <div class="d-flex justify-content-between pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{route('admin.travels.index')}}" class="btn btn-toolbar"><u>Go back to Travels</u></a>
                </div>
            </form>
        </section>
    </div>
    
@endsection