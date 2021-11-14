@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-5">
            <h1 class="card-title"> {{$travel->name}} </h1>
            <address class="card-subtitle"> City: {{ $travel->destination_city }} </address>
            <address class="card-subtitle"> Country: {{ $travel->destination_country}} </address>
            <address class="card-subtitle"> {{ $travel->accomodation}} </address>

            <h3>Total Price: {{ $travel->price}} $</h3>
            <h3>{{ $travel->travel_days}} days</h3>
            <h3>{{ $travel->participants}}</h3>

            <address class="card-subtitle">from ( {{ $travel->date_departure}} )</address>
            <address class="card-subtitle">to ( {{ $travel->date_return}} )</address>
            <address class="card-subtitle"> {{ $travel->airline_company}} </address>

            <p class="card-body"> {{$travel->description}} </p>
            <div class="card-footer back-to-list">
                <a href="{{route('admin.travels.index')}}" class="btn btn-toolbar"><u>Go back to Travels</u></a>
            </div>
            
        </div>
    </div>
@endsection