<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'PagesController@index');
Route::get('me', 'PagesController@index');

Route::get('work', 'PagesController@work');
Route::get('contact', 'PagesController@contact');


Route::get('work/web', function()
{
    $category="web";
    $id_category = DB::select(DB::raw('SELECT id FROM categories WHERE LOWER(name)=LOWER (:category);'), array('category' => $category));
    $works = DB::select(DB::raw('SELECT id,name,client,url,a,descricao FROM works WHERE id_category=:id;'), array('id' => $id_category[0]->id));

    return View::make('index_w')->withWorks($works);
});

Route::get('work/{work}', function($work_a)
{

    $work = DB::select(DB::raw('SELECT id,name,client,url,a,descricao FROM works WHERE a=:work_a;'), array('work_a' => $work_a));
    return View::make('work')->withWork($work);
});

