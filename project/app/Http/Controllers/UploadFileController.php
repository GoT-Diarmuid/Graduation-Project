<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class UploadFileController extends Controller {
   public function index(){
      return view('uploadfile');
   }
   public function showUploadFile(Request $request){
      $team_id = $_POST["team_id"];
      $file1 = $request->file('report');
      $file2 = $request->file('picture');
   
        $destinationPath = 'uploads';
        
        if($file1->getClientOriginalExtension() == 'pdf'){
            $file1->move($team_id,$team_id. '.' .$file1->getClientOriginalExtension());
            echo 'Team report uploaded!';
        }else{
            echo 'Team report upload failed!';
        }

        echo '<br/>';

        $fileTypes = array('jpg','png','gif');
        $extension = $file2->getClientOriginalExtension();
        $isInFileType = in_array($extension,$fileTypes);

        $timenow = date("Y-m-d H_m_s");

        if($isInFileType){
            $file2->move($team_id,$timenow. '.' .$file2->getClientOriginalExtension());
            echo 'Project picture uploaded!';
        }else{
            echo 'Team report upload failed!';
        }
    }
}
