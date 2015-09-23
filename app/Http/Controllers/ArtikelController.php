<?php

namespace App\Http\Controllers;

use Input;
use View;
use Auth;
use Request;
use App\Role;
use App\User;
use App\Artikel;
use App\Kategori;
use App\Http\Controllers\EventController;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        if(Auth::user()->role_id == 1){
            $this->data['users'] = User::get();
            $this->data['artikel'] = Artikel::where('kategori_id','=',$id)->get();
            $this->data['kategori'] = Kategori::find($id);
            $this->data['id_kategori'] = $id;
            return view('admin.article.manage',$this->data);
            
        }
        else if (Auth::user()->role_id == 2)
        {
            $this->data['users'] = User::get();
            $this->data['artikel'] = Artikel::where('kategori_id','=',$id)->where('users_id','=',Auth::user()->id)->get();
            $this->data['kategori'] = Kategori::find($id);
            $this->data['id_kategori'] = $id;
            return view('admin.article.manage',$this->data);
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id_1)
    {
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            if (Request::isMethod('get')) {
                $this->data = array();
                $this->data['kategori'] = Kategori::find($id_1);
                return View::make('admin.article.create', $this->data);
            } else if (Request::isMethod('post')) {
                $data = Input::all();
                date_default_timezone_set('Asia/Jakarta'); // CDT
                $current_date = date('Y-m-d');

                $name = $_FILES['imginp']['name'];
                $test = pathinfo($name, PATHINFO_FILENAME);
                $target_dir = "artikel/";
                $original_name = $test;
                $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
                //$target_file = $target_dir . basename($_FILES["imginp"]["name"]);
                
                $uploadOk = 1;
                
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["imginp"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                // Check if file already exists
                $i = 1;
                while (file_exists($target_dir.$test.".".$imageFileType)) {
                    $test = (string)$original_name.$i;
                    $name = $test.".".$imageFileType;
                    $i++;
                }
                $target_file = $target_dir.$name;
                // Check file size
                if ($_FILES["imginp"]["size"] > 20000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["imginp"]["tmp_name"], $target_file)) {
                        echo "The file ". basename( $_FILES["imginp"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                $target_file_final = "../../".$target_file;
                Artikel::insertGetId(array(
                    'judul' => $data['judul'], 
                    'konten' => $data['konten'], 
                    'tanggal' => $current_date, 
                    'gambar' => $target_file_final,
                    'users_id' => Auth::user()->id,
                    'kategori_id' => $id_1
                ));
                return redirect('admin/artikel/'.$id_1);
            }
        }
        else{
            return redirect('/');
        }
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
    public function update($id_kategori,$id_artikel)
    {

        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            if (Request::isMethod('get')) {
                $this->data = array();
                $this->data['artikel'] = Artikel::find($id_artikel);
                return View::make('admin.article.update', $this->data);
            } else if (Request::isMethod('post')) {

                $data = Input::all();
                date_default_timezone_set('Asia/Jakarta'); // CDT
                $current_date = date('Y-m-d');
               
                if (empty($_FILES['imginp']['name'])) {
                    $target_file_final = $data['img_temp'];
                }

                /*if (is_uploaded_file($_FILES['imginp']['name']))*/
                else
                {
                    $name = $_FILES['imginp']['name'];
                    $test = pathinfo($name, PATHINFO_FILENAME);
                    $target_dir = "artikel/";
                    $original_name = $test;
                    $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
                    //$target_file = $target_dir . basename($_FILES["imginp"]["name"]);
                    
                    $uploadOk = 1;
                    
                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["imginp"]["tmp_name"]);
                        if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    }

                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if file already exists
                    $i = 1;
                    while (file_exists($target_dir.$test.".".$imageFileType)) {
                        $test = (string)$original_name.$i;
                        $name = $test.".".$imageFileType;
                        $i++;
                    }
                    $target_file = $target_dir.$name;
                    // Check file size
                    if ($_FILES["imginp"]["size"] > 20000000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["imginp"]["tmp_name"], $target_file)) {
                            echo "The file ". basename( $_FILES["imginp"]["name"]). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    $target_file_final = "../../".$target_file;
                }

                /*else{
                    echo "adadsdsa";
                    break;
                }*/
                
                Artikel::where('id', $id_artikel)->update(array(
                    'judul' => $data['judul'], 
                    'konten' => $data['konten'], 
                    'tanggal' => $current_date, 
                    'gambar' => $target_file_final,
                    'users_id' =>  Auth::user()->id,
                    'kategori_id' => $id_kategori
                ));
                return redirect('admin/artikel/'.$id_kategori);
            }
        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id_kategori,$id_artikel)
    {
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            if (Request::isMethod('get')) {
                $this->data = array();
                $this->data['artikel'] = Artikel::find($id_artikel);
                return View::make('admin.article.delete', $this->data);
            } else if (Request::isMethod('post')) {
                $data = Input::all();
                Artikel::where('id', $id_artikel)->delete();
                return redirect('admin/artikel/'.$id_kategori);
            }
        }
        else{
            return redirect('/');
        }
    }
}
