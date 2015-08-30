<?php

namespace App\Http\Controllers;

use Input;
use View;
use Auth;
use Request;
use Maatwebsite\Excel\ExcelServiceProvider;
use App\Role;
use App\User;
use App\Event;
use App\ParticipantSingle;
use App\Http\Controllers\EventController;

class ParticipantSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       
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
                return View::make('admin.event.konten.participant.single.create', $this->data);
            } else if (Request::isMethod('post')) {
                    /*$data = Input::file('file');
                    $file = fopen($data, "r");
                    while ($dataImport = fgetcsv($file, 10000,",")!== false) {
                        $insert = ParticipantSingle::create(array('nama' => $dataImport[0],
                                                       'team' => $dataImport[1],
                                                       'kategori' => $dataImport[2],
                                                       'event' => $dataImport[3]));
                    }
                    if($insert)
                    {
                        return redirect('admin/event/manage/'.$id_event);    
                    }*/
                    $data = Input::file('file')
                    Excel::load($data, function($archive)
                    {
                        $result = $archive->get();
                        foreach ($result as $key => $value) {
                            echo $value->nama.'<br>';
                        }
                    })->get();
                    break();
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
    public function update($id_event,$id_bulletin)
    {

        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            if (Request::isMethod('get')) {
                $this->data = array();
                $this->data['event'] = Event::find($id_event);
                $this->data['bull'] = Bulletin::find($id_bulletin);
                return View::make('admin.event.konten.bulletin.update', $this->data);
            } else if (Request::isMethod('post')) {

                $data = Input::all();

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

                    if($imageFileType_file != "doc" && $imageFileType_file != "docx" && $imageFileType_file != "pdf"
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
                Bulletin::where('id', $id_bulletin)->update(array(
                    'tanggal' => $data['tanggal'], 
                    'file' => $target_file_final_file
                ));
                return redirect('admin/event/update/'.$id_event);
            }
        } else {
            return redirect('admin/event/update/'.$id_event);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id_event,$id_bulletin)
    {
        if (Request::isMethod('get')) {
            $this->data = array();
            $this->data['event'] = Event::find($id_event);
            $this->data['bulletin'] = Bulletin::find($id_bulletin);
            return View::make('admin.event.konten.bulletin.delete', $this->data);
        } else if (Request::isMethod('post')) {
            $data = Input::all();
            Bulletin::where('id','=', $id_bulletin)->delete();
            return redirect('admin/event/update/'.$id_event);
        }
         
    }
}
