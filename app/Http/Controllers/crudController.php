<?php

namespace App\Http\Controllers;


// use Illuminate\Http\request;
use Illuminate\Support\Facades\Request;
use Session;
use DB;



class crudController extends Controller
{
   public function insertData(){
    $data = Request::except('_token', 'submit');
    $tbl = decrypt($data['tbl']);
    unset ($data['tbl']);

      if(Request::has('social')){
         $data['social'] = implode(',',$data['social']);
      }

      if(!empty($data['image'])){
         if(Request::hasFile('image')){
           $data['image'] = $this->upload($data['image'], $tbl);
         }
       }  

       if (Request:: has ('title')){
          $data['slug'] = $this->slug($data['title']);
       }

    $data['created_at'] = date('Y-m-d H:i:s');
    DB::table($tbl)->insert($data);

    session::flash('message','Data inserted successfully!!!');
      return redirect()->back();
   }

   private function slug($string){
      $string = strtolower(trim($string));
      $string = preg_replace('/\s+/', '-', $string);
      $string = preg_replace('/[^a-z0-9-]/', '-', $string);
      $string = preg_replace('/-+/', '-', $string);
      return rtrim($string, '-');
   }

   private function upload($image, $tbl){
      $name = $image->getClientOriginalName();
      $newName = date('ymdgis').$name;
      $image->move(public_path().'/'.$tbl,$newName);
      return $newName;
    }
 
    public function updateData(){
      $data = Request::except('_token', 'submit');
      $tbl = decrypt($data['tbl']);
      unset ($data['tbl']);
  
        if(Request::has('social')){
           $data['social'] = implode(',',$data['social']);
        }
  
        if(!empty($data['image'])){
           if(Request::hasFile('image')){
             $data['image'] = $this->upload($data['image'], $tbl);
           }
         }  
  
         if (Request:: has ('title')){
            $data['slug'] = $this->slug($data['title']);
         }
  
      $data['updated_at'] = date('Y-m-d H:i:s');
      DB::table($tbl)->where(key($data),reset($data))->update($data);
  
      session::flash('message','Data updated successfully!!!');
      return redirect()->back();
     }

  
}