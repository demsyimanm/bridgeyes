<?php

namespace App\Http\Controllers;



use Auth;
use App\Http\Controllers\Controller;
use Input;
use App\User;
use Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
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
        if ($this->data['role_id'] == 2)
        {
            return view('user',$this->data);
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create_news()
    {   
        if(Auth::check())
        {
            $this->data['username'] = Auth::user()->username;
            return view('user_write_news', $this->data);
        }
    }

    public function post_news()
    {
        if(Auth::check())
        {
            $data = Input::all();
            insertGetId(array(
            'nama' => $data['nama'], 
            'username' => $data['username'], 
            'password' => bcrypt($data['password']),
            'role_id' => '2'
        ));
        return redirect('/');
        }
    }

    public function create_article()
    {
        if(Auth::check())
        {
            $this->data['username'] = Auth::user()->username;
            return view('user_write_article',$this->data);    
        }
    }

    public function signup()
    {
        $data = Input::all();
        User::insertGetId(array(
            'nama' => $data['nama'], 
            'username' => $data['username'], 
            'password' => bcrypt($data['password']),
            'role_id' => '2'
        ));
        return redirect('/');
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

    public function login()
    {
        if (Request::isMethod('post'))
        {
            $credentials = Input::only('username','password');
            $this->data['username'] = Input::get('username');
            if (Auth::attempt($credentials,true))
            {
                return view('user',$this->data);
            }

            return view('home');
        }

        // else if (Request::isMethod('get'))
        // {
        //     if (Auth::check())
        //     {
        //         return view('admin/home');
        //     }

        //     return view('admin.login');
        // }
    }

    public function auth_user()
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
        else if ($this->data['role_id'] == 2)
        {
            return 'dddf';
        }
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
