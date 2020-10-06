@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Employees:
                  {{ $emp -> firstname }}
                  {{ $emp -> lastname }}
                </div>

                <div class="card-body">


                  <ul>
                    firstname: {{$emp -> firstname}}<br>
                    lastname: {{$emp -> lastname}}<br>
                    date of birth: {{$emp -> date_of_birth}}<br>
                    private code: {{$emp -> private_code}}<br>
                    location id: {{$emp -> location_id}}<br>
                  </ul>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
