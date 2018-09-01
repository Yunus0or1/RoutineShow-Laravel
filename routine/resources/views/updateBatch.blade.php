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
		
		

		
		
		{{ Form::open(['route' => 'update.BatchNumber'])}}
		
		<div id="form" >
		
		<div id="select" style="font-size:20px;">
					
			
		<div id="" style="font-size:20px;">
		<p style="margin-left:200px;margin-top:50px;margin-bottom:20px">How many batches will be in this semester  :</p>
		<h22 style="margin-left:200px">
				{{ Form::label('', 'Number of total Batch:')}}
				{{ Form::select('numberOfBatch', [
					'1' 		=> '1',
					'2' 		=> '2',
					'3' 		=> '3',
					'4' 		=> '4',
					'5' 		=> '5',
					'6' 		=> '6',
					'7' 		=> '7',
					'8' 		=> '8',
					'9'			=> '9',
					'10' 		=> '10'
				], null, array('class' => ''))}} </h22>
		</div>
		
		</br>
				
		
		<div class="input-filed" style="margin-left:200px;margin-top:50px">
				{{ Form::submit('Submit', ['class'=>'btn btn-primary right'])}}
			</div>
			
		{{ Form::hidden('admin',$admin) }}	
		
		
     {{ Form::close()}}
	 



</body>


</html>