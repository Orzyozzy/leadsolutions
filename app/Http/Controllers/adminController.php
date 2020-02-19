<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session; 
use DB;

class adminController extends Controller
{
    public function __construct(){
    }

    public function admin(){
        return view ('backend.index');
    }

    public function setups(){
        $data =  DB::table ('setups')->first();
        if(!empty($data)){
            $socials = explode(',',$data->social);
        }else{
            $socials = [];
        }
        return view ('backend.insert.setup',['data'=>$data, 'socials'=>$socials]);
    }

    public function categories(){
        $data = DB::table('categories')->get();
        return view('backend.insert.category', ['data'=>$data]);
    }

    public function deleteCategory($id){
        $data = DB::table('categories')->where('cid',$id)->delete();
        return redirect()->back()->with('message','Data deleted successfully');
    }

    public function editCategory($id){
        $data = DB::table('categories')->get();
        $maindata = DB::table('categories')->where('cid',$id)->first();
        
        if($maindata)
        {
        return view('backend.edit.category',['data'=>$data,'maindata' =>$maindata]);    
        }
        else{
            return redirect('categories');
        }
          }

    public function newPost(){
        $cats = DB::table('categories')->where('status','on')->get();
        return view ('backend.insert.newpost',['cats'=>$cats]);    
    }

    public function allPosts(){
        $data = DB::table('contents')->get();
        return view ('backend.display.posts',['data'=>$data]);
    }

    public function editPost($id){
        $cats = DB::table('categories')->where('status','on')->get();
        $data = DB::table('contents')->where('conid',$id)->first();
        return view ('backend.edit.editpost',['data'=>$data,'cats'=>$cats]);
    }
   
    public function deletePost($id){
        $data = DB::table('contents')->where('conid',$id)->delete();
        return redirect()->back()->with('message','Data deleted successfully');
    }

    public function newService(){
        return view ('backend.insert.service');    
    }

    public function prodcats(){
        $data = DB::table('prodcats')->get();
        return view('backend.insert.product-category', ['data'=>$data]);
    }

    public function product(){
        $cats = DB::table('prodcats')->where('status','on')->get();
        return view('backend.insert.product',['cats'=>$cats]);
    }

    public function buttons(){
        $cats = DB::table('products')->where('status','on')->get();
        return view('backend.insert.modal',['cats'=>$cats]);
    }

    public function newMember(){
        return view ('backend.insert.team');
    }

    public function allservices(){
        $data = DB::table('services')->get();
        return view ('backend.display.services',['data'=>$data]);
    }

    public function allproduct(){
        $data = DB::table('products')->get();
        return view ('backend.display.product',['data'=>$data]);
    }

    
    public function allmembers(){
        $data = DB::table('teams')->get();
        return view ('backend.display.team',['data'=>$data]);
    }
}





