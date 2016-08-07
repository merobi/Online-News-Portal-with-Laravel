<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=view('pages.home_slider');
        $content=view('pages.home_content');
        return view('master')
                ->with('slider',$slider)
                ->with('main_content',$content);
    }
    public function contact_us()
    {
      $contact_slider=view('pages.contact_slider');
      $contact_content=view('pages.contact_form');
      return view('master')->with('slider',$contact_slider)
                           ->with('main_content',$contact_content);
    }

    public function category_news($category_id)
    {
        $slider=view('pages.contact_slider');
        
        $news_by_category=DB::table('news')
                                            ->where('category_id',$category_id)
                                            ->where('publication_status',1)
                                            ->get();
        $content=view('pages.category_news')
                                ->with('news_by_category',$news_by_category);
        return view('master')
                ->with('slider',$slider)
                ->with('main_content',$content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
