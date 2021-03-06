<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Pharmacy</title>
    <link rel="icon" href="images/favicon.ico">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
    <div id="app">
       <nav class="navbar navbar-default navbar-static-top" style="background-color: #e3f2fd;">
            <div class="container">
                <div class="navbar-header">

                    <!--Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{ url('/admin') }}" class="navbar-brand"><img src="images/Final Logo3x.png" alt="Logo" style="width:40px; height:40px; margin-top: -10px; "/></a>

                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        Hello {{ Auth::user()->store_name }}
                    </a>
                </div>

               @include('layouts.pharm_nav')
               
            </div>
        </nav>

        @yield('content')
    </div>
    <br>
		
	<div class="container" id="my_div">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if(Session::has('message'))
                    <div class="alert alert-danger fade in">
                        
                            {{ Session::get('message') }}
                        
                    </div>
                @endif

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                     @if(Session::has('welcome_message'))
                        <div class="alert alert-success">
                            {{ Session::get('welcome_message') }}
                        </div>
                    @endif



                    


                   

                
                <div class="list-group">
                               
                          

                                

                                <a href="" class="list-group-item"> 
                                    <li style="list-style-type:none"><b>ORDER ID:</b> </li>  
                                    <li style="list-style-type:none"><b>CUSTOMER ID:</b> </li> 
                                    <li style="list-style-type:none"><b>CUSTOMER NAME:</b> </li> 
                                    <li style="list-style-type:none"><b>DATE OF ORDER:</b></li>
                                </a>


                    </div> 
                   

                 </div>
            </div>
        </div>
    </div>
</div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">

    setInterval(function(){
        location.reload('#my_div');
       //$('#my_div').load('/admin');
    }, 15000) /* time in milliseconds (ie 2 seconds)*/



    // @if(isset($status) && $status == 2)

    // alert("Cancelled" );
    // <?php
    // $status = 0 ;
    // ?>
    // @endif

    </script>


</body>
</html>
