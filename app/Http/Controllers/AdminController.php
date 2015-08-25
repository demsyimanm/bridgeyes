<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Input;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $data = array();
    public function index()
    {   
        $this->data['username'] = "";
        $this->data['password'] = "";
        if(Auth::check())
        {
            $this->data['username'] = Auth::user()->username;
            $this->data['password'] = Auth::user()->password;
            $this->data['role_id'] = Auth::user()->role_id;
        }
        if ($this->data['role_id'] == 1)
        {
            return view('admin.home',$this->data);
        }

    }

       

    public function login()
    {
        if (Request::isMethod('post'))
        {
            $credentials = Input::only('username','password');
            $this->data['username'] = Input::get('username');
            if (Auth::attempt($credentials,true))
            {
                return view('admin/home',$this->data);
            }

            return view('admin.login');
        }

        else if (Request::isMethod('get'))
        {
            if (Auth::check())
            {
                return view('admin/home');
            }

            return view('admin.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
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
