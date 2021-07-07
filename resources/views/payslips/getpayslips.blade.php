@extends('layouts.layouts')
@section('content')
<style>
    thead {
        color: aliceblue;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-darkt bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">OcataDnet</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
                
      @guest
        <div class="form-inline my-2 my-lg-0">
            <a class="form-control mr-sm-2" href="{{url('login')}}">Log In</a>
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('register')}}">Register</a>
        </div>
      @endguest

      
    </div>
  </nav>
<div class="container mt-5">
    <h2>Pay periods</h2>
    @can('Will Generate Payslips', Model::class)        
        <table class="table table-stripped">
            <thead class="bg-primary">
                <tr>
                    <th>Pay Period Cycle *</th>
                    <th>Employee Name</th>   
                    <th>Description</th>
                    <th>Action</th>
                    <th><a href="{{url('/pays/create')}}" class="btn btn-success"> + Add</a></th> 
                </tr>
            </thead>
            @if(count($payslips))
                <tbody>
                    @foreach ($payslips as $item)
                    @php
                      $user = App\Models\User::find($item->employee_id);    
                    @endphp
                    <tr>
                        <td>{{ $item->type}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td> @if($item->status)  <i class="fas fa-cloud"></i> @else <i class="fa fa-crop" aria-hidden="true">@endif</i> </td>
                        <td><i class="fa fa-address-book" aria-hidden="true"></i></td>
                    </tr>
                    @endforeach
                
                @else 
                <tr><td colspan="1"></td>
                    <td>No Records</td></tr>
                </tbody>    
            @endif

        @endcan
        
    </table>
    
   
</div>

@endsection
