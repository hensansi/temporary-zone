<?php

class PortfolioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$category="web";
		$id_category = DB::select(DB::raw('SELECT id FROM categories WHERE LOWER(name)=LOWER (:category);'), array('category' => $category));
		$works = DB::select(DB::raw('SELECT id,name,client,url,a,descricao FROM works WHERE id_category=:id;'), array('id' => $id_category[0]->id));
		
		return View::make('index_w')->withWorks($works);
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
	public function show($work_a)
	{
		$work = DB::select(DB::raw('SELECT id,name,client,url,a,descricao FROM work WHERE a=:work_a;'), array('work_a' => $work_a));
		return View::make('work')->withWork($work);
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
