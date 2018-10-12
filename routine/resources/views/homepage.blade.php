<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <title>Routine EEE</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
<style>
#routine {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin-top:30px;
}

#routine td, #routine th {
    border: 1px solid #ddd;
    padding: 15px;
	font-size :30px;
}

#routine tr:nth-child(even){background-color: #f2f2f2;}

#routine tr:hover {background-color: #ddd;}

#routine th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

body {margin:0;}

.navigation {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
  padding: 25px 20px;
}

nav.navbar.bootsnav {
    background: #222533 none repeat scroll 0 0;
    border: 0 none;
    height: 80px;
}
}
</style>
</head>
<body>


<!-- Header -->
        <header>           
           <!-- Navbar -->
            <nav class="navbar bootsnav">
					
					<div class="container">
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
						
                            <li><a href="{{url('/')}}">Home</a></li>                    
                            <li><a href="{{url('/login')}}">Login</a></li>
                        </ul>
                    </div>
					<p style="color:white; font-size:23px;margin-top:-50px"><img src="{{asset('img/sust.png')}}" style="width:20px;height:20px;margin-right:5px" >Department of CSE,SUST</p>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->

<table id="routine">

  <tr>
    <th>Batch</th>
    <th>Current Class [{{$now_time}}]</th>
	<th>Course Teacher</th>
    <th>Next Class [{{$next_time}}]</th>
	<th>Course Teacher</th>

  </tr>
  

@foreach($details as $details)
  <tr>
    <td>{{$details->batch_name}}</td>
    <td>{{$details->$now_class}}</td>
    <td>{{$details->$now_class_teacher}}</td>
	<td>{{$details->$next_class}}</td>
    <td>{{$details->$next_class_teacher}}</td>
  </tr>
@endforeach
  
    
  



<div class="navigation">

<h12 style="font-size:20px;color:white;float:left;margin-top:10px" >Today is : {{$today_date}}.</h12>

<h12 style="font-size:18px;color:white;float:right" >This project is completed by</br>Ahmed Yunus (23rd Batch)</br>Department of CSE,SUST.</h12>
<img src="{{asset('img/me.jpg')}}" style="width:70px;height:65px;margin-right:10px;float:right;margin-top:5px" >
</div>
</body>
</html>


<script type="text/javascript">

   setTimeout(function(){

       location.reload();

   },600000);

</script>
