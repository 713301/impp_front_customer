<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Input;
class ProjectController extends Controller {

	public function CreateResponse(Request $request) {
        // set form validation rules

		$this->validate($request, [
			'project_desc' => 'required',
			'project_duration_type'  => 'required',
			'duration_days'=>'required'
			]);
		$result['project_desc'] = $request['project_desc'];
		$result['project_duration_type'] = $request['project_duration_type'];
		$result['duration_days'] = $request['duration_days'];
		
		if(!empty($request)){
			$response['bool'] = true;
			$response['object'] = $result;
		}  
		else{
			$response['bool'] = false;
			$response['object'] = $result;
		}
		return $response;
	}
	public function CategoryResponse(Request $request) {
        // set form validation rules

/*		$this->validate($request, [
			'proj_taxonomy' => 'required'
			
			]);*/
		$result['proj_taxonomy'] = $request['proj_taxonomy'];
		
		
		if(!empty($request)){
			$response['bool'] = true;
			$response['object'] = $result;
		}  
		else{
			$response['bool'] = false;
			$response['object'] = $result;
		}
		return $response;
	}
	
}