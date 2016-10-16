<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//one way to pass data
		/*$name = "Sanooktuktuk";
		return view('test')->with([
			'first' => 'Sanook',
			'last' => 'Tuktuk'
		]);*/
		/////////////////////////////////////////////////////////
		//another way to pass data
		/*$data = [];
		$data['first'] = 'Sanook';
		$data['last'] = 'Tuktuk';

		return view('test', $data);*/
		/////////////////////////////////////////////////////////
		//a third way to pass data
		$first = 'Sanook';
		$last = 'Tuktuk';

		//use php's compact to build associative array from the variables
		return view('test', compact('first', 'last'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

}
