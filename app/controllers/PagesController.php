<?php

class PagesController extends \BaseController {


	public function index()
	{
		$categories = DB::table('categories')->get();
		return View::make('index')->withCategories($categories);
	}
	

}
