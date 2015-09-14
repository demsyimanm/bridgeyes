<?php

namespace App\Http\Controllers;

use Input;
use View;
use Auth;
use Request;
use App\Role;
use App\User;
use App\Event;
use App\Gallery;
use App\Http\Controllers\EventController;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id_event)
    {
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            if (Request::isMethod('get')) {
                $this->data = array();
                $this->data['event'] = Event::find($id_event);
                return View::make('admin.event.konten.gallery.create', $this->data);
            } else if (Request::isMethod('post')) {
                $data = Input::all();

                $name = $_FILES['imginp']['name'];
                $test = pathinfo($name, PATHINFO_FILENAME);
                $target_dir = "event/konten/gallery/";
                $original_name = $test;
                $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
                
                $uploadOk = 1;
                
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
                if ($_FILES["imginp"]["size"] > 50000000) {
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
            
                Gallery::insertGetId(array(
                    'event_id' => $id_event,
                    'gambar' => $target_file_final
                ));
                return redirect('admin/event/update/'.$id_event);
            }
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
    public function destroy($id_event,$id_photo)
    {
        if (Request::isMethod('get')) {
            $this->data = array();
            $this->data['event'] = Event::find($id_event);
            $this->data['gallery'] = Gallery::find($id_photo);
            return View::make('admin.event.konten.gallery.delete', $this->data);
        } else if (Request::isMethod('post')) {
            $data = Input::all();
            Gallery::where('id','=', $id_photo)->delete();
            return redirect('admin/event/update/'.$id_event);
        }
         
    }
}
