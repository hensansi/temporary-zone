<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('me', [PagesController::class, 'index']);
Route::get('work', [PagesController::class, 'work']);
Route::get('contact', [PagesController::class, 'contact']);

Route::get('work/web', function () {
    $category = "web";
    $id_category = DB::select('SELECT id FROM categories WHERE LOWER(name) = LOWER(?)', [$category]);
    $works = DB::select('SELECT id, name, client, url, a, descricao FROM works WHERE id_category = ?', [$id_category[0]->id]);

    return view('index_w', ['works' => $works]);
});

Route::get('work/{work}', function ($work_a) {
    $work = DB::select('SELECT id, name, client, url, a, descricao FROM works WHERE a = ?', [$work_a]);
    return view('work', ['work' => $work]);
});