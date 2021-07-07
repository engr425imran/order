<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Styles -->
   <style>
    ul {
        list-style: none;
    }
   </style>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
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
        <div class="row ">
            <div class="col-md-6 mb-3 ">
            <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#box">employee</button>
                <ul id="box" class="collapse">
                    <li>link 1</li>
                    <li>link 2</li>
                    <li>link 2</li>
                </ul>
            </div>
            <div class="col-md-6 ">
            <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#payroll">payroll</button>
                <ul id="payroll" class="collapse">
                    <li>Pay Types</li>
                    <li>Pank Transfer setup</li>
                    <li>Pay Points</li>
                    <li>Payroll Calculations</li>
                    <li>Payslip Setup</li>
                    <li><a href="{{url('pays')}}">Pay period</a></li>
                    <li>Empolyee take on total</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 mb-3">
            <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#locations">Locations</button>
                <ul id="locations" class="collapse">
                    <li>link 1</li>
                    <li>link 2</li>
                    <li>link 2</li>
                </ul>
            </div>
            <div class="col-md-6 ">
            <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#timeoff">time offs</button>
                <ul id="timeoff" class="collapse">
                    <li>link 1</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 mb-3">
            <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#accounting">accouting</button>
                <ul id="accounting" class="collapse">
                    <li>link 1</li>
                    <li>link 2</li>
                    <li>link 2</li>
                </ul>
            </div>
            
        </div>
        
        
    
    </div>
   
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>