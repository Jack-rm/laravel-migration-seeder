@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session("deleted_title"))
            <div class="alert alert-warning">
                {{session('alert-message')}}
            </div>
        @endif

        <header class="p-3">
            <h1>Travels Packages</h1>
            <a href="{{route('admin.travels.create')}}">Create New Travel</a>
        </header>




        <table class="table table-bordered">
            <thead>
                <th class="col">Name</th>
                <th class="col">City</th>
                <th class="col">Country</th>
                <th class="col">Accomodation</th>
                <th class="col">Price</th>
                <th class="col">Days</th>
                <th class="col">Departure</th>
                <th class="col">Return</th>
                <th class="col">Airline</th>
                <th class="col">Format</th>
                <th class="col">Availability</th>
            </thead>
            <tbody>
                @forelse ($travels as $travel)
                    <tr>
                        <td><a href="{{ route('admin.travels.show', $travel->id ) }}">{{ $travel->name }}</a></td>
                        <td>{{ $travel->destination_city}}</td>
                        <td>{{ $travel->destination_country}}</td>
                        <td>{{ $travel->accomodation}}</td>
                        <td>{{ $travel->price}}</td>
                        <td>{{ $travel->travel_days}}</td>
                        <td>{{ $travel->date_departure}}</td>
                        <td>{{ $travel->date_return}}</td>
                        <td>{{ $travel->airline_company}}</td>
                        <td>{{ $travel->participants}}</td>

                    @if ($travel->is_available == 1)
                        <td><b style="color:green;"> @php echo "yes" @endphp </b></td>
                    @else
                        <td><b style="color:red;"> @php echo "no" @endphp </b></td>
                    @endif
                        
                        <td><a href="{{ route('admin.travels.edit', $travel ) }}" class="btn btn-secondary">Edit</a></td>
                        <td>
                            <form action="{{route('admin.travels.destroy', $travel->id )}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Delete</a>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No Travels Available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        

    </div>
@endsection