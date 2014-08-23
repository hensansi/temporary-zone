<?php

class PagesController extends \BaseController {


	public function index()
	{
		$categories = DB::table('category')->get();
		return View::make('index')->withCategories($categories);
	}
	

}
