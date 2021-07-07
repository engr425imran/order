<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Dashboard Template · Bootstrap v4.6</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> --}}
    
    <script src="{{asset('js/adminDashborad.js')}}"></script>
    

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<style>
    .{
        .signout {
            color:white;
        }
    }
</style>
    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/adminDashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <form action="{{url('/logout')}}" method="post">@csrf
      <button type="submit" class="nav-link signout bg-dark">Sign Out</button></form>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fab fa-dashcube"></i> &nbsp;
              Dashboard 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-dolly"></i> &nbsp;
              Basic Information
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/allproducts')}}">
              <i class="fas fa-shopping-cart"></i>&nbsp;
              Payslips
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-person-booth"></i>&nbsp;
              Customer Slips
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-flag-checkered"></i>&nbsp;
              Tax Certificate
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fab fa-stack-exchange"></i>&nbsp;
              Leave
            </a>
          </li>
        </ul>

      
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    @role( 'Employee' )
   
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        @if(Session::has('news'))
        <div class="alert alert-success">
          <p>Leave Application Submitted Succsessfull</p>
        </div>
        @endif
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{url('/leaves/create')}}" class="btn btn-sm btn-outline-secondary">Apply</a>
            <button type="button" class="btn btn-sm btn-outline-secondary">Off Sick</button>
            {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Apply</button> --}}
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <div class="row">
        @php
         $user=App\Models\Leave::Where('email', auth()->user()->email)->first();    
        @endphp
        <div class="col-md-4 ">
          <div class="card">
            <div class="card-header">
              {{ auth()->user()->name }} has Submiited leave Application
            </div>
            <div class="card-body">
              <h5 class="card-title"> Reason :{{ $user->comment }}</h5>
              <h3> Start Date :{{ $user->enddate}}</h3>
              <h3>End Date : {{ $user->enddate}}</h3>
             <br><br><br>
            </div>
          </div>
        </div>
        
      </div>
   
    <div class="container">
      <div class="row">
      
        <div class="col-md-5">
          <h2 class="bg-dark text-light">Leave</h2>
          <h4>12:00</h4>
          <span>Annual leave day</span>

        </div>
        <div class="col-md-5">
          <h2 class="bg-dark text-light">Inbox</h2>
          <input type="text" style="float: right;" placeholder="search here ...">
          <div class="mt-5">
            <p style="width:100%; height:70px;">No data</p>
          </div>
          <div class="row mt-5">
            <div class="col-md-5">
              <h3 class="bg-dark text-light">Teams</h3>
              <h4>Subcription</h4>
              <input type="text" placeholder="search here ...">
            </div>
          </div>
        </div>

        

      </div>

    </div>

    @endrole
    @can('will see payslips', Model::class)
       Here is some payroll slips need some crud
       <a href="{{url('/pays')}}">GO tO</a>
    @endcan
    @can('will approve leave', Model::class)
      @php
      $leave = App\Models\Leave::orderBy('created_at', 'desc')->limit(1)->get(); 
  
      @endphp
      @foreach ($leave as $item)
        @if(Session::has('applicationapproved'))
        <div class="alert alert-success">
          <p>Leave Application Approved </p>
        </div>
        @endif
        @if(!$item->status)
          <div class="card mt-4">
            <div class="card-header">
              @php    
              $applicats=App\Models\User::where('email', $item->email)->first();
              @endphp
              {{ $applicats->name }} has  apply for leave Application
            </div>
          
            
            <div class="card-body bg-light">        
              <h3 class="card-title"> Start Date :{{ $item->startdate }} </h5>
              <h3>End Date {{ $item->enddate}}</h2>
            <a href="{{url('approveLeave/'.$item->id)}}" class="btn btn-primary">Approve</a>
            </div>
          </div>

          @else
          <div class="container mt-5 ">
            <div class="row">
              <div class="row">
                <p>No Application Has Submiited yet</p>

              </div>

            </div>

          </div>

         @endif
      @endforeach
      
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th># ID</th>
              <th>Type</th>
              <th>start Date</th>
              <th>End Date</th>
              <th>Status</th>
            </tr>
          </thead>
          @php
            $leaves = App\Models\Leave::orderBy('created_at', 'ASC')->get();    
          @endphp
          @foreach ($leaves as $item)
          
          <tbody>
            <tr>
              <td> {{ $loop->index +1 }}</td>
              <td>{{ $item->type }}</td>
              <td> {{ $item->startdate}}</td>
              <td>{{ $item->enddate }}</td>
              @if($item->status)
              <td> Approved</td>
              @else 
              <td><a href="{{url('approveLeave/'.$item->id)}}" class="btn btn-danger">Approve</a></td>
              @endif 
            </tr>
            @endforeach
          </tbody>
        </table>
        @endcan
      </div>
    </main>
  </div>
</div>


    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
      <script src="{{asset('js/app.js')}}"></script>        
  </body>
</html>