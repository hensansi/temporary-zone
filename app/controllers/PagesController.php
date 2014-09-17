<?php

class PagesController extends \BaseController {


    public function index()
	{
		$categories = DB::table('categories')->get();
		return View::make('me')->withCategories($categories);
	}

    public function me()
    {
        return View::make('me');
    }

    public function work()
    {

        $category="web";
        $works=null;
        $id_category = DB::select(DB::raw('SELECT id FROM categories WHERE LOWER(name)=LOWER (:category);'), array('category' => $category));

        if($id_category){
            $works = DB::select(DB::raw(
                    'SELECT w.id,name,client,url,a,descricao,s.technologies AS "technologies"
            from works w,
            (Select string_agg(te.name, \' \') AS "technologies",wk.id
            FROM works wk,mixes mx, technologies te
            WHERE mx.id_work=wk.id AND mx.id_technology=te.id
            GROUP BY wk.id) s
            WHERE s.id=w.id AND w.id_category=:id;'),
                array('id' => $id_category[0]->id));

            return View::make('index_w')->withWorks($works);
        }
        else{
            return View::make('index_w')->withWorks($works);
        }

        $categories = DB::table('categories')->get();
        return View::make('work_index')->withCategories($categories);
    }

    public function contact()
    {
        return View::make('contact');
    }
	

}
