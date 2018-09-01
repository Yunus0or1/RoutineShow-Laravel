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


        <section id="a" class="a">
            <!-- Carousel -->
            <div id="a" class="a" data-ride="a">
                <!-- Carousel-inner -->
                <div class="a" role="a">
                    <div class="item active">
                        </br>
						</br>
						</br>
						</br>
						</br></br>
                        <div class="a">
                            <div class="a">     
							<p style="font-size:20px;color:purple;margin-left:500px;padding:30px"> <B>Welcome {{$details[0]->name}}.As an admin you can : <B><p>
                                <div class="buttong" style="margin-left:30%">
								<a  href="{{url('/updateBatch/'.$details[0]->name)}}" style="color:Black" class="btn know_btn" id="ab">Update Batch</a>
								<a  href="{{url('/updateRoutineSoSelectABatch/'.$details[0]->name)}}" style="color:Black" class="btn know_btn" id="ab">Update Routine</a>
                                <a  href="{{url('/updateNews/'.$details[0]->name)}}" style="color:Black" class="btn know_btn" id="ab">Update Breaking News</a>
								<a  href="{{url('/addAdmin/'.$details[0]->name)}}" style="color:Black" class="btn know_btn" id="ab">Add Admin</a>
								</div>
                            </div>					
                        </div>
                    </div>
                   
		

        </section>



    </body>	
</html>	