<?php

namespace App\Http\Controllers;

use DB;
use App\Quotation;
use Input;
use Illuminate\Http\Request;
use Carbon\carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use DateTime;


class PageController extends Controller
{
	
	public function timeConversion($x){
		
		if($x==1)  return 'one' ;
		if($x==2)  return 'two' ;
		if($x==3)  return 'three' ;
		if($x==4)  return 'four' ;
		if($x==5)  return 'five' ;
		if($x==6)  return 'six' ;
		if($x==7)  return 'seven' ;
		if($x==8)  return 'eight' ;
		if($x==9)  return 'nine' ;
		if($x==10) return 'ten' ;
		if($x==11) return 'eleven' ;
		if($x==12) return 'twelve' ;
		if($x==13) return 'one' ;
		if($x==14) return 'two' ;
		if($x==15) return 'three' ;
		if($x==16) return 'four' ;
		if($x==17) return 'five' ;
		if($x==18) return 'six' ;
		if($x==19) return 'seven' ;
		if($x==20) return 'eight' ;
		if($x==21) return 'nine' ;
		if($x==22) return 'ten' ;
		if($x==23) return 'eleven' ;
		if($x==24) return 'twelve' ;
		
		
		
	}
	
	
	public function routine(){

		$today_date = Carbon::now()->format('l, d F, Y');
		
		$now = 9;    //Carbon::now()->hour+6;
		
		// Make $now =9 to view the whole project at any time.
		// $now = 9 means current time is 9am of this day.
		

		
		//return $now ;
						
		$next = $now + 1 ;
		
		$now_time = $now ;
		
		$next_time = $next ;
		
		
		
		if($now >= '17' && $now <= '24' || $now >= '1' && $now <= '7')
			return view ('vacation');
		
		
		if($now >= 1 && $now <=11 || $now == 24)
		{
			$timezone_now = 'am';
		}
		
		else $timezone_now = 'pm' ;
		
				
		if($next >= 1 && $next <=11 || $next == 24 )
		{
			$timezone_next = 'am';
		}
		
		else $timezone_next = 'pm' ;
		
		
		
		$mod_now_time = $now_time ;
		$mod_next_time = $next_time ;
		
		$now_time =  ($now_time%12) .' '.$timezone_now ;
		$next_time = ($next_time%12).' '.$timezone_next ;
		
		
		
		if($mod_now_time%12==0 && $mod_now_time-1==11)
		{
			$now_time = '12 pm';			
		}
		
		else if($mod_now_time%12==0 && $mod_now_time-1==23){
			$now_time = '12 am';
			
		}
		
		if($mod_next_time%12==0 && $mod_next_time-1==11)
		{
			$next_time = '12 pm';			
		}
		
		else if($mod_next_time%12==0 && $mod_next_time-1==23){
			$next_time = '12 am';			
		}
		
		$now = $this->timeConversion($now);
		$next = $this->timeConversion($next);
		
		
		 
		$now_class = $now.'_'.$timezone_now.'_class';		
		$now_class_teacher = $now_class.'_teacher';
	
		
		
	    $next_class = $next.'_'.$timezone_next.'_class';		
		$next_class_teacher = $next_class.'_teacher';
		
		
	
		
		$details =DB::table('routine')
				
				->where('day_number','=',Carbon::now()->dayOfWeek)
                ->get();
		
		
				
		$news =DB::table('news')
				
                ->get();		
		
		
		if ($news == '[]')
				$news = '' ;
		
		
		
		else {
			
		$newsTime = DB::table('news')->get();
		
		
		//return (Carbon::now()->dayOfWeek) ;
		
			if(($newsTime[0]->times +1)==(Carbon::now()->hour+6) || ($newsTime[0]->time_day_of_week +1)==(Carbon::now()->dayOfWeek) ||
				($newsTime[0]->time_day_of_week +1)== 7)
			
			{
				
				DB::table('news')
				
				->where('id','=',1)
				->update(
			  [
			  'news'=>' ' ,
			  'times'=>' ' ,
			  ]
				);
			}
			
		}
				

		

		return view('homepage')
		->with('details',$details)
		->with('now_class',$now_class)
		->with('now_class_teacher',$now_class_teacher)
		->with('next_class',$next_class)
		->with('next_class_teacher',$next_class_teacher)
		->with('now_time',$now_time)
		->with('next_time',$next_time)
		->with('news',$news)
		->with('today_date',$today_date);
	}
	
	
	
	
	
	
	public function updateBatch($admin){
		
		$admin = $admin ;
			
		return view ('updateBatch')->with('admin',$admin) ;
		
	}
	
	
	public function updateBatchNumber(){
		
		$number = Input::get('numberOfBatch');
		$admin = Input::get('admin');
		
				
		return view ('updateBatchNumber')
		
		->with('number',$number)
		->with('admin',$admin);
	}
	
	
	public function updateBatchNumberAndName()
	{
		
		DB::table('routine')   ->delete();
		DB::table('batchname') ->delete();
		
		$admin = Input::get('admin');
		
		$id_increment_in_database = 1 ;
		
		$number = Input::get('number');
		
		

		for($i=1;$i<=$number;$i++)
		{
		
			$batchName = 'batchName'.$i;

			$batchName = Input::get($batchName);

			DB::table('batchname')
					->insert(
					[
						'id' => $i,
						'batch_name'=>$batchName,
					
					]
							);
						
			
			for($x=0;$x<7;$x++)
			{
				if($x==0)
				{
					DB::table('routine')
					->insert(
          [
		  'id' => $id_increment_in_database,
          'batch_name'=>$batchName,
		  'day_number' =>$x,
		  'day_name' =>'Sunday',
          ]
							);
				}
				
				if($x==1)
				{
					DB::table('routine')
					->insert(
          [
		  'id' => $id_increment_in_database,
          'batch_name'=>$batchName,
		  'day_number' =>$x,
		  'day_name' =>'Monday',
          ]
							);
				}
				
				if($x==2)
				{
					DB::table('routine')
					->insert(
          [
		  'id' => $id_increment_in_database,
          'batch_name'=>$batchName,
		  'day_number' =>$x,
		  'day_name' =>'Tuesday',
          ]
							);
				}
				
				
				if($x==3)
				{
					DB::table('routine')
					->insert(
          [
		  'id' => $id_increment_in_database,
          'batch_name'=>$batchName,
		  'day_number' =>$x,
		  'day_name' =>'Wednesday',
          ]
							);
				}
				
				
				if($x==4)
				{
					DB::table('routine')
					->insert(
          [
		  'id' => $id_increment_in_database,
          'batch_name'=>$batchName,
		  'day_number' =>$x,
		  'day_name' =>'Thursday',
          ]
							);
				}
				
				if($x==5)
				{
					DB::table('routine')
					->insert(
          [
		  'id' => $id_increment_in_database,
          'batch_name'=>$batchName,
		  'day_number' =>$x,
		  'day_name' =>'Friday',
          ]
							);
				}
				
				if($x==6)
				{
					DB::table('routine')
					->insert(
          [
		  'id' => $id_increment_in_database,
          'batch_name'=>$batchName,
		  'day_number' =>$x,
		  'day_name' =>'Saturday',
          ]
							);
				}
				
				
			$id_increment_in_database++;	
				
			}
		}
		

		return view('backtoHomePage')
			->with('number',3);

		

	}
	
	
	
	
	public function updateNews($admin){
		
		return view('updateNewsPage')->with('admin',$admin);;
		
	}
	
	public function updateNewsPage(){
		
		$admin = Input::get('admin') ;
		
		$details = Input::get('details');
		$timeOfinsertion = Carbon::now();
		$timeOfinsertion = $timeOfinsertion->hour + 6 ;
		$timeOfinsertion_day_of_week = Carbon::now()->dayOfWeek ;
		
		DB::table('news')->Delete();
		
		DB::table('news')
			
			->insert(
          [
		  'id' => 1,
          'news'=>$details ,
		  'times'=>$timeOfinsertion,
		  'time_day_of_week' => $timeOfinsertion_day_of_week,
          ]
        	);
			
		return view('backtoHomePage')
			->with('number',1);
		
	}
	
	public function addAdmin($admin){
		
		return view('addAdmin')->with('admin',$admin);
		
	}
	
	public function adminadded(){
	
		$data = Input::all();
		
		DB::table('users')
			
			->insert(
          [
		  'name' => Input::get('name'),
          'email'=> Input::get('email') ,
		  'password'=>Input::get('password'),
          ]
        	);
			
			return view('backtoHomePage')
			->with('number',2);
	}
	
	
	
	
	
	
	
	
	
	public function updateRoutineSoSelectABatch($admin)
	{
		
		
		
		
		$batch_name_getting_from_database
		
		= DB::table('routine')
		
		->groupBy('batch_name')
		->orderBy('id')
		->get(['batch_name']);
	
		$select = [];
		
		$i=1;
		
		
		foreach($batch_name_getting_from_database as $batch_selection)
		{
			$select[$i] = $batch_selection->batch_name;
			$i++;
		}
		
		
		
		return view ('updateRoutineSoSelectABatch')
		->with('select',$select)->with('admin',$admin);
		
	}
	
	
	public function batchSelectedForUpdatingRoutine()
	{
		$batch = Input::get('batchSelected');
		
		$admin = Input::get('admin'); 
		
		$batch = DB::table('batchname')
		
				->where('id','=',$batch)
				->get();
				
		
		
		$batch =DB::table('routine')
				
				->where('batch_name','=',$batch[0]->batch_name)
                ->get();
		
		return view('updateRoutinePage')->with('batch',$batch)->with('admin',$admin);
	}
	
	
	
	
	
	
	
	public function updateBatchRoutine(){
		
		$batch_name = Input::get('batch_name');

		
		
		
		for($i=0;$i<7;$i++)
			
		{
			
		$nine_am_class           = Input::get('nine_am_class'.$i);		
		$nine_am_class_teacher   = Input::get('nine_am_class_teacher'.$i);
		
		$ten_am_class           = Input::get('ten_am_class'.$i);
		$ten_am_class_teacher   = Input::get('ten_am_class_teacher'.$i);
		
		$eleven_am_class           = Input::get('eleven_am_class'.$i);
		$eleven_am_class_teacher   = Input::get('eleven_am_class_teacher'.$i);
		
		$twelve_pm_class           = Input::get('twelve_pm_class'.$i);
		$twelve_pm_class_teacher   = Input::get('twelve_pm_class_teacher'.$i);
		
		$one_pm_class           = Input::get('one_pm_class'.$i);
		$one_pm_class_teacher   = Input::get('one_pm_class_teacher'.$i);
		
		$two_pm_class           = Input::get('two_pm_class'.$i);
		$two_pm_class_teacher   = Input::get('two_pm_class_teacher'.$i);
		
		$three_pm_class           = Input::get('three_pm_class'.$i);
		$three_pm_class_teacher   = Input::get('three_pm_class_teacher'.$i);
		
		$four_pm_class           = Input::get('four_pm_class'.$i);
		$four_pm_class_teacher   = Input::get('four_pm_class_teacher'.$i);
			
		
		
		
		
		
		DB::table('routine')
			
			->where('batch_name','=',$batch_name)
			->where('day_number','=',$i)
			->update(
          [
          'nine_am_class'=>$nine_am_class ,
          'nine_am_class_teacher'=>$nine_am_class_teacher,
		  
          'ten_am_class'=>$ten_am_class,
          'ten_am_class_teacher'=>$ten_am_class_teacher ,
		  
          'eleven_am_class'=>$eleven_am_class,
		  'eleven_am_class_teacher'=>$eleven_am_class_teacher,
		  
          'twelve_pm_class'=>$twelve_pm_class,
          'twelve_pm_class_teacher'=>$twelve_pm_class_teacher,
		  
		  'one_pm_class'=>$one_pm_class,
		  'one_pm_class_teacher'=>$one_pm_class_teacher,
		  
		  'two_pm_class'=>$two_pm_class,
		  'two_pm_class_teacher'=>$two_pm_class_teacher,
		  
          'three_pm_class'=>$three_pm_class ,
		  'three_pm_class_teacher'=>$three_pm_class_teacher, 
		  
		  'four_pm_class'=>$four_pm_class ,
		  'four_pm_class_teacher'=>$four_pm_class_teacher,

          ]
        	);
		
		}
		
		return view('backtoHomePage')
			->with('number',3);
		
	}
	


		public function login(){
			
			return view('loginFirstStep');
		}
		
		public function loggedin()
		{
			
				$email  = Input::get('email');
				$password = Input::get('password');
				
				$details = DB::table('users')
				
					->where('email',$email)
					->get();
					
					
				
				if ($details == '[]')
				{
						Session::flash('message', " Email/Password combination is not right ");
						return Redirect::back()->withInput();
				}
				
				else {
					if($password == $details[0]->password)
						return view ('adminPage')->with('details',$details);
					else 
					{
						Session::flash('message', " Email/Password combination is not right ");
						return Redirect::back()->withInput();
					}
				}
		}
		
		public function admin(){
		
		return view('adminPage');
		
	}
}






















