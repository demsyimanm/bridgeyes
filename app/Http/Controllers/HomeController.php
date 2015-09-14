<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;

use input;
use View;
use Request;
use App\Artikel;
use App\News;
use App\Event;
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
        $this->data['news'] = News::get();
        return view('home', $this->data);
    }

    public function event()
    {
        $this->data=array();
        $this->data['event'] = Event::get();
        return view('list_event', $this->data);
    }

    public function show_event($id)
    {
        $this->data['event'] = Event::find($id);
        return view('event_detail', $this->data);
    }

    public function show_news($id)
    {
        $this->data['news'] = News::find($id);
        return view('news_full', $this->data);
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

    public function detil_event()
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
