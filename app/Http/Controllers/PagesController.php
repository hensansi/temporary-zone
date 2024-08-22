<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Work;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('me', compact('categories'));
    }

    public function me()
    {
        return view('me');
    }

    public function work()
    {
        $category = "web";
        $works = null;
        $id_category = Category::where(DB::raw('LOWER(name)'), strtolower($category))->value('id');

        if ($id_category) {
            $works = DB::table('works as w')
                ->join(DB::raw('(SELECT wk.id, string_agg(te.name, \' \') AS technologies
                                FROM works wk
                                JOIN mixes mx ON mx.id_work = wk.id
                                JOIN technologies te ON mx.id_technology = te.id
                                GROUP BY wk.id) s'), 'w.id', '=', 's.id')
                ->where('w.id_category', $id_category)
                ->select('w.id', 'w.name', 'w.client', 'w.url', 'w.a', 'w.descricao', 's.technologies')
                ->get();

            return view('index_w', compact('works'));
        }

        return view('index_w', compact('works'));
    }

    public function contact()
    {
        return view('contact');
    }
}