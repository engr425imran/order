@extends('layouts.layouts')
@section('content')
<style>
        form{
            border: 1px solid seagreen;
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
      <div class="form-inline my-2 my-lg-0">
        <a class="form-control mr-sm-2" href="{{url('login')}}">Log In</a>
        <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('register')}}">Register</a>
      </div>

      
    </div>
  </nav>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-5 offset-3 ">
                <form action="{{url('/pays')}}" method="post" class="form">
                    @csrf
                    <div class="form-group">
                        <label for="payPeriodCycle" > &nbsp Pay Period Cycle *</label><br>
                        <select name="paycycletype" id="" class="from-control">
                            <option value="monthly" class="from-control">Monthly</option>
                            <option value="weekly" class="from-control">Weekly</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="employee" > &nbsp Select Employee *</label><br>
                      @foreach ($users as $item)
                      <select name="employee" id="" class="from-control">
                          <option value="{{$item->id}}" class="from-control">{{$item->name}}</option>
                          @endforeach
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="name" > &nbsp Name (optional)</label><br>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name (optional)">
                    </div>
                    
                    <div class="form-group">
                        <label for="firstPeriodEndDate" > &nbsp First Period End Date *</label><br>
                        <input type="date" name="firstPeriodEndDate" id="firstPeriodEndDate" class="form-control" placholder="DD MM YYYY">
                    </div>
                    <div class="form-group">
                        <label for="lastDayMonth" > &nbsp Last Day of Month *</label><br>
                        <input type="number" min="1" max="31" name="lastDayMonth" id="lastDayMonth" class="form-control" placholder="DD MM YYYY">
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                    </div>
                    
                   <div class="mt-3">
                    <center> <button type="submit" class="btn btn-success"> Save</button>
                    <a href="{{url('/pays')}}" class="btn btn-danger">Cancel</a>
                   </div>
                </form>

            </div>

        </div>
    </div>
@endsection