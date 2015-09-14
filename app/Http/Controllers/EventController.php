<?php

namespace App\Http\Controllers;

use Input;
use View;
use Auth;
use Request;
use App\Role;
use App\User;
use App\Event;
use App\Bulletin;
use App\Gallery;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\GalleryController;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->data['event'] = Event::get();
        return view('admin.event.manage',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            if (Request::isMethod('get')) {
                $this->data = array();
                $this->data['user'] = Auth::user()->id;
                return View::make('admin.event.create', $this->data);
            } else if (Request::isMethod('post')) {
                $data = Input::all();

                if (empty($_FILES['imginp']['name'])) {
                    $target_file_final = '.../.../event/blank1.png';
                }

                /*if (is_uploaded_file($_FILES['imginp']['name']))*/
                else
                {
                    $name = $_FILES['imginp']['name'];
                    $test = pathinfo($name, PATHINFO_FILENAME);
                    $target_dir = "event/";
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
                    if ($_FILES["imginp"]["size"] > 500000) {
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

                    /*FILE*/
                    if (empty($_FILES['file']['name'])) {
                        $target_file_final_file = '';
                    }
                    else
                    {
                        $name_file = $_FILES['file']['name'];
                        $test_file = pathinfo($name_file, PATHINFO_FILENAME);
                        $target_dir_file = "event/file/";
                        $original_name_file = $test_file;
                        $imageFileType_file = pathinfo($name_file,PATHINFO_EXTENSION);
                        //$target_file = $target_dir . basename($_FILES["imginp"]["name"]);
                        
                        $uploadOk_file = 1;
                        
                        // Check if image file is a actual image or fake image

                        if($imageFileType_file != "doc" && $imageFileType_file != "docx" && $imageFileType != "pdf"
                        && $imageFileType_file != "xls" && $imageFileType_file != "xlsx" && $imageFileType_file != "csv") {
                            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk_file = 0;
                        }
                        // Check if file already exists
                        $i = 1;
                        while (file_exists($target_dir_file.$test_file.".".$imageFileType_file)) {
                            $test_file = (string)$original_name_file.$i;
                            $name_file = $test_file.".".$imageFileType_file;
                            $i++;
                        }
                        $target_file_file = $target_dir_file.$name_file;
                        // Check file size
                        if ($_FILES["file"]["size"] > 500000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk_file = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk_file == 0) {
                            echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_file)) {
                                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }
                        $target_file_final_file = "../../".$target_file_file;
                    }
                Event::insertGetId(array(
                    'judul' => $data['judul'], 
                    'konten' => $data['konten'], 
                    'tanggal' => $data['tanggal'], 
                    'gambar' => $target_file_final,
                    'file' => $target_file_final_file,
                    'users_id' => Auth::user()->id
                ));
                return redirect('admin/event');
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
    public function manage($id)
    {
        $this->data = array();
        $this->data['eve'] = Event::find($id);
        $this->data['bulletin'] = Bulletin::where('event_id','=',$id)->get();
        $this->data['gallery'] = Gallery::where('event_id','=',$id)->get();
        return view('admin.event.konten.manage',$this->data);
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
    public function update($id)
    {

        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            if (Request::isMethod('post')) {

                $data = Input::all();
                if (empty($_FILES['imginp']['name'])) {
                    $target_file_final = $data['img_temp'];
                }

                /*if (is_uploaded_file($_FILES['imginp']['name']))*/
                else
                {
                    $name = $_FILES['imginp']['name'];
                    $test = pathinfo($name, PATHINFO_FILENAME);
                    $target_dir = "event/";
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
                    if ($_FILES["imginp"]["size"] > 500000) {
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

                    /*FILE*/
                    if (empty($_FILES['file']['name'])) {
                        $target_file_final_file = $data['file_temp'];
                    }
                    else
                    {
                        $name_file = $_FILES['file']['name'];
                        $test_file = pathinfo($name_file, PATHINFO_FILENAME);
                        $target_dir_file = "event/file/";
                        $original_name_file = $test_file;
                        $imageFileType_file = pathinfo($name_file,PATHINFO_EXTENSION);
                        //$target_file = $target_dir . basename($_FILES["imginp"]["name"]);
                        
                        $uploadOk_file = 1;
                        
                        // Check if image file is a actual image or fake image

                        if($imageFileType_file != "doc" && $imageFileType_file != "docx" && $imageFileType != "pdf"
                        && $imageFileType_file != "xls" && $imageFileType_file != "xlsx" && $imageFileType_file != "csv") {
                            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk_file = 0;
                        }
                        // Check if file already exists
                        $i = 1;
                        while (file_exists($target_dir_file.$test_file.".".$imageFileType_file)) {
                            $test_file = (string)$original_name_file.$i;
                            $name_file = $test_file.".".$imageFileType_file;
                            $i++;
                        }
                        $target_file_file = $target_dir_file.$name_file;
                        // Check file size
                        if ($_FILES["file"]["size"] > 500000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk_file = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk_file == 0) {
                            echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_file)) {
                                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }
                        $target_file_final_file = "../../".$target_file_file;
                    }
                Event::where('id', $id)->update(array(
                    'judul' => $data['judul'], 
                    'konten' => $data['konten'], 
                    'tanggal' => $data['tanggal'], 
                    'gambar' => $target_file_final,
                    'file' => $target_file_final_file
                ));
                return redirect('admin/event/update/'.$id);
            }
        } else {
            return redirect('admin/event/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if (Request::isMethod('get')) {
            $this->data = array();
            $this->data['eve'] = Event::find($id);
            return View::make('admin.event.delete', $this->data);
        } else if (Request::isMethod('post')) {
            $data = Input::all();
            Event::where('id', $id)->delete();
            return redirect('admin/event');
        }
         
    }
}
