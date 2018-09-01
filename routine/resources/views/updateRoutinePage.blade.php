

<!doctype html>
<html>
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
		

<style>

.foo {
    width: 200px;
	height : 20px;
	margin-left:100%;
	display:block;
	float:right;

}

.button{
	
	margin-top : 20px ;
}
</style>

<p style="font-size:25px;color:purple;margin-left:50%"><I><B><u>{{$batch[0]->batch_name}}</u></B></I><p>
	
@foreach($batch as $batch)
	
{{ Form::open(['route' => 'update.YearRoutine'])  }}
					
			
				
		<p style="font-size:25px;color:red"><u>{{$batch->day_name}}</u><p>
		
		<div id="" style="font-size:20px;">
		
		
	
		</div>
		</br>
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px;  ">	<label>9 am Class:</label>  {{ Form::textarea('nine_am_class'.$batch->day_number, $batch->nine_am_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label> {{ Form::textarea('nine_am_class_teacher'.$batch->day_number, $batch->nine_am_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px">	<label>10 am Class:</label>  {{ Form::textarea('ten_am_class'.$batch->day_number, $batch->ten_am_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label>  {{ Form::textarea('ten_am_class_teacher'.$batch->day_number, $batch->ten_am_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px">	<label>11 am Class:</label>  {{ Form::textarea('eleven_am_class'.$batch->day_number, $batch->eleven_am_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label>  {{ Form::textarea('eleven_am_class_teacher'.$batch->day_number, $batch->eleven_am_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px">	<label>12 pm Class:</label>  {{ Form::textarea('twelve_pm_class'.$batch->day_number, $batch->twelve_pm_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label>  {{ Form::textarea('twelve_pm_class_teacher'.$batch->day_number, $batch->twelve_pm_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px">	<label>1 pm Class:</label>  {{ Form::textarea('one_pm_class'.$batch->day_number, $batch->one_pm_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label>  {{ Form::textarea('one_pm_class_teacher'.$batch->day_number, $batch->one_pm_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px">	<label>2 pm Class:</label>  {{ Form::textarea('two_pm_class'.$batch->day_number, $batch->two_pm_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label>  {{ Form::textarea('two_pm_class_teacher'.$batch->day_number, $batch->two_pm_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px">	<label>3 pm Class:</label>  {{ Form::textarea('three_pm_class'.$batch->day_number, $batch->three_pm_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label>  {{ Form::textarea('three_pm_class_teacher'.$batch->day_number, $batch->three_pm_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		
		
		<div id="first" style="font-size:20px;">
		
		<h22 style="font-size:20px">	<label>4 pm Class:</label>  {{ Form::textarea('four_pm_class'.$batch->day_number, $batch->four_pm_class, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div id="first" style="font-size:20px;margin-bottom:40px">
		
		<h22 style="font-size:20px">	<label>Class Teacher:</label>  {{ Form::textarea('four_pm_class_teacher'.$batch->day_number, $batch->four_pm_class_teacher, ['size' => '70x1','class' => 'foo']) }} </h22>	
		</div>
		
		<div class="">
				{{ Form::hidden('batch_name',$batch->batch_name)}}
				{{ Form::hidden('admin',$admin) }}
		</div>
		
		
	 
	 
	 
@endforeach	 
	 
	<div class="button" style="margin-bottom:50px">
				{{ Form::submit('Submit', ['class'=>'btn btn-primary right'])}}
		</div>
			
     {{ Form::close()}}
	 
	 
	 
	 
	 </html>