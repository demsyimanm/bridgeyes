<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;

use input;
use View;
use Request;
use App\Artikel;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->data=array();
        $this->data['artikel'] = Artikel::get();
        return view('home', $this->data);
    }

    public function event()
    {
        return view('list_event');
    }

    public function blog()
    {
        return view('blog_full');
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

    public function participant()
    {
        return view('participant_detail');
    }

    public function bulletins()
    {
        return view('bulletins');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function result()
    {
        return view('result_detail');
    }

    public function event_detail()
    {
        return view('event_detail');
    }

    public function all_article()
    {
        return view('all_article');
    }

    public function all_news()
    {
        return view('all_news');
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
