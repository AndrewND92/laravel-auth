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
                    Firstname: {{$emp -> firstname}}<br>
                    Lastname: {{$emp -> lastname}}<br>
                    Date of Birth: {{$emp -> date_of_birth}}<br>
                    Private Code: {{$emp -> private_code}}<br>
                    Location: {{$emp -> location -> city}}<br>
                  </ul>

                  <br>
                  @auth
                    <a class="btn btn-primary" href=""> Edit </a>
                    <a class="btn btn-danger" href="{{ route('emp.delete', $emp -> id ) }}">Delete</a>
                    @else
                      Please login!

                  @endauth


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
