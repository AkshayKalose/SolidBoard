<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Auth;
use DateTime;
use Validator;
use Redirect;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class TaskController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('tasks.index')->with('tasks', Auth::user()->tasks()->get());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tasks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Request::all();
		$data['due'] = (new DateTime($data['due']))->format('Y-m-d');
		$data['user_id'] = Auth::id();

		$validator = Validator::make($data, [
			'title' => 'required',
			'priority' => 'required|integer',
			'due' => 'date',
		]);
		if ($validator->fails() || Request::all()['due'] == '') {
			if (Request::all()['due'] == '') {
				$validator->errors()->add('due', 'Due Date is Empty');
			}
			return Redirect::back()->withErrors($validator->errors()->all())->withInput();
		} else {
			$new_task = new Task($data);
			$new_task->save();
			return Redirect::action('TaskController@index');;
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Task::destroy($id);
		
		return Redirect::action('TaskController@index');
	}

}
