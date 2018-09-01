<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
    </head>
    
		
		<style>
		    
			body{
 
  padding: 0;
  margin: 0;	
  background: url(""); no-repeat center center fixed; 
  background-size: cover;
  height: 100%;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}

.form{
	
	margin-left : 200px;
	
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
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->
		
		

		
		
		{{ Form::open(['route' => 'update.News'])}}
		
		<div id="form" >
		
		<div id="select" style="font-size:20px;">
					
			
		<div id="blogwrite" style="font-size:20px;">
		<p style="margin-left:200px;margin-top:50px">Add a breaking news :</p>
		<h22 >	{{ Form::textarea('details', null, ['size' => '70x10','class' => 'form']) }} </h22>
		</div>
		
		</br>
				{{ Form::hidden('admin',$admin) }}
		
		<div class="input-filed" style="margin-left:200px;margin-top:50px">
				{{ Form::submit('Submit', ['class'=>'btn btn-primary right'])}}
			</div>
			
     {{ Form::close()}}
	 



</body>


</html>