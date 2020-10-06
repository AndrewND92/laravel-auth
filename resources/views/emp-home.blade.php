@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">

                     @foreach ($emps as $emp)
                      <li>
                        <a href="{{route('emp.show', $emp -> id)}}">
                            {{ $emp -> firstname }}
                          {{ $emp -> lastname }}
                        </a>
                      </li>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
