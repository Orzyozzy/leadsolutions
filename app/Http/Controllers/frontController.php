<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $setups = DB::table('setups')->first();       
        if(!empty($setups)){ 
            $socials = explode(',',$setups->social);
            $icons = explode(',',$setups->social);
                    foreach ($icons as $icon){
                        $icon = explode (',', $icon);
                     
                    }
                }else{ 
                    $socials = [];
                    $icons = [];   
        }
        $cats = DB::table('categories')->where('status', 'on')->get();        

        $carousel1 = DB::table('contents')->where('category','carousel1')->first();
        $carousel2 = DB::table('contents')->where('category','carousel2')->first();
        $carousel3 = DB::table('contents')->where('category','carousel3')->first();
        $carousel4 = DB::table('contents')->where('category','carousel4')->first();
        $carousel5 = DB::table('contents')->where('category','carousel5')->first();
        $carousel6 = DB::table('contents')->where('category','carousel6')->first();

        $about = DB::table('contents')->where('category','aboutus')->first();
        $about->slug = DB::table('categories')->where('title','aboutus')->value('slug');
        $services = DB::table('services')->where('status','on')->get();
        $services->slug = DB::table('categories')->where('title','services')->value('slug');
        $product = DB::table('products')->where('status','on')->get();
            foreach($product as $prod){
                $prod->class = DB::table('prodcats')->where('title',$prod->category)->value('slug');
            }
        $product->slug = DB::table('categories')->where('title','products')->value('slug');
       
        $prodcats = DB::table('prodcats')->where('status','on')->get(); 

    
        $buttons = DB::table('buttons')->where('status','on')->get();
      
        $teams = DB::table('teams')->where('status','on')->get(); 
            foreach($teams as $team){
                $teamurl = explode(',', $team->social);
            }
        
        $teams->slug = DB::table('categories')->where('title','teams')->value('slug');

        return view ('frontend.index', [
            'setups' => $setups,
            'socials' => $socials,
            'icons' => $icons,
            'cats' => $cats,
            'about' => $about,
            'services' => $services,
            'product' => $product,
            'prodcats' => $prodcats,
            'teams' => $teams,
            'teamurl' => $teamurl,
            'carousel1' => $carousel1,
            'carousel2' => $carousel2,
            'carousel3' => $carousel3,
            'carousel4' => $carousel4,
            'carousel5' => $carousel5,
            'carousel6' => $carousel6,
            'buttons' => $buttons,       
        ]);
    }

   

    public function learnmore(){
        $setups = DB::table('setups')->first();       
        if(!empty($setups)){ 
            $socials = explode(',',$setups->social);
            $icons = explode(',',$setups->social);
                    foreach ($icons as $icon){
                        $icon = explode (',', $icon);
                     
                    }
                }else{ 
                    $socials = [];
                    $icons = [];   
        }
        $cats = DB::table('categories')->where('status', 'on')->get();        

        $carousel1 = DB::table('contents')->where('category','carousel1')->first();
        $carousel2 = DB::table('contents')->where('category','carousel2')->first();
        $carousel3 = DB::table('contents')->where('category','carousel3')->first();
        $carousel4 = DB::table('contents')->where('category','carousel4')->first();
        $carousel5 = DB::table('contents')->where('category','carousel5')->first();
        $carousel6 = DB::table('contents')->where('category','carousel6')->first();

        $about = DB::table('contents')->where('category','aboutus')->first();
        $about->slug = DB::table('categories')->where('title','aboutus')->value('slug');
        $services = DB::table('services')->where('status','on')->get();
        $services->slug = DB::table('categories')->where('title','services')->value('slug');
        $product = DB::table('products')->where('status','on')->get();
            foreach($product as $prod){
                $prod->class = DB::table('prodcats')->where('title',$prod->category)->value('slug');
            }
        $product->slug = DB::table('categories')->where('title','products')->value('slug');
       
        $prodcats = DB::table('prodcats')->where('status','on')->get(); 

    
        $buttons = DB::table('buttons')->where('status','on')->get();
      
        $teams = DB::table('teams')->where('status','on')->get(); 
            foreach($teams as $team){
                $teamurl = explode(',', $team->social);
            }
        
        $teams->slug = DB::table('categories')->where('title','teams')->value('slug');

        return view ('frontend.dropdown.vision', [
            'setups' => $setups,
            'socials' => $socials,
            'icons' => $icons,
            'cats' => $cats,
            'about' => $about,
            'services' => $services,
            'product' => $product,
            'prodcats' => $prodcats,
            'teams' => $teams,
            'teamurl' => $teamurl,
            'carousel1' => $carousel1,
            'carousel2' => $carousel2,
            'carousel3' => $carousel3,
            'carousel4' => $carousel4,
            'carousel5' => $carousel5,
            'carousel6' => $carousel6,
            'buttons' => $buttons,       
        ]);
    }

    public function missionvision(){
        $setups = DB::table('setups')->first();       
        if(!empty($setups)){ 
            $socials = explode(',',$setups->social);
            $icons = explode(',',$setups->social);
                    foreach ($icons as $icon){
                        $icon = explode (',', $icon);
                     
                    }
                }else{ 
                    $socials = [];
                    $icons = [];   
        }
        $cats = DB::table('categories')->where('status', 'on')->get();        

        $carousel1 = DB::table('contents')->where('category','carousel1')->first();
        $carousel2 = DB::table('contents')->where('category','carousel2')->first();
        $carousel3 = DB::table('contents')->where('category','carousel3')->first();
        $carousel4 = DB::table('contents')->where('category','carousel4')->first();
        $carousel5 = DB::table('contents')->where('category','carousel5')->first();
        $carousel6 = DB::table('contents')->where('category','carousel6')->first();

        $about = DB::table('contents')->where('category','aboutus')->first();
        $about->slug = DB::table('categories')->where('title','aboutus')->value('slug');
        $services = DB::table('services')->where('status','on')->get();
        $services->slug = DB::table('categories')->where('title','services')->value('slug');
        $product = DB::table('products')->where('status','on')->get();
            foreach($product as $prod){
                $prod->class = DB::table('prodcats')->where('title',$prod->category)->value('slug');
            }
        $product->slug = DB::table('categories')->where('title','products')->value('slug');
       
        $prodcats = DB::table('prodcats')->where('status','on')->get(); 

    
        $buttons = DB::table('buttons')->where('status','on')->get();
      
        $teams = DB::table('teams')->where('status','on')->get(); 
            foreach($teams as $team){
                $teamurl = explode(',', $team->social);
            }
        
        $teams->slug = DB::table('categories')->where('title','teams')->value('slug');

        return view ('frontend.dropdown.mission', [
            'setups' => $setups,
            'socials' => $socials,
            'icons' => $icons,
            'cats' => $cats,
            'about' => $about,
            'services' => $services,
            'product' => $product,
            'prodcats' => $prodcats,
            'teams' => $teams,
            'teamurl' => $teamurl,
            'carousel1' => $carousel1,
            'carousel2' => $carousel2,
            'carousel3' => $carousel3,
            'carousel4' => $carousel4,
            'carousel5' => $carousel5,
            'carousel6' => $carousel6,
            'buttons' => $buttons,       
        ]);
    }

    public function corporate(){
        $setups = DB::table('setups')->first();       
        if(!empty($setups)){ 
            $socials = explode(',',$setups->social);
            $icons = explode(',',$setups->social);
                    foreach ($icons as $icon){
                        $icon = explode (',', $icon);
                     
                    }
                }else{ 
                    $socials = [];
                    $icons = [];   
        }
        $cats = DB::table('categories')->where('status', 'on')->get();        

        $carousel1 = DB::table('contents')->where('category','carousel1')->first();
        $carousel2 = DB::table('contents')->where('category','carousel2')->first();
        $carousel3 = DB::table('contents')->where('category','carousel3')->first();
        $carousel4 = DB::table('contents')->where('category','carousel4')->first();
        $carousel5 = DB::table('contents')->where('category','carousel5')->first();
        $carousel6 = DB::table('contents')->where('category','carousel6')->first();

        $about = DB::table('contents')->where('category','aboutus')->first();
        $about->slug = DB::table('categories')->where('title','aboutus')->value('slug');
        $services = DB::table('services')->where('status','on')->get();
        $services->slug = DB::table('categories')->where('title','services')->value('slug');
        $product = DB::table('products')->where('status','on')->get();
            foreach($product as $prod){
                $prod->class = DB::table('prodcats')->where('title',$prod->category)->value('slug');
            }
        $product->slug = DB::table('categories')->where('title','products')->value('slug');
       
        $prodcats = DB::table('prodcats')->where('status','on')->get(); 

    
        $buttons = DB::table('buttons')->where('status','on')->get();
      
        $teams = DB::table('teams')->where('status','on')->get(); 
            foreach($teams as $team){
                $teamurl = explode(',', $team->social);
            }
        
        $teams->slug = DB::table('categories')->where('title','teams')->value('slug');

        return view ('frontend.dropdown.corporate', [
            'setups' => $setups,
            'socials' => $socials,
            'icons' => $icons,
            'cats' => $cats,
            'about' => $about,
            'services' => $services,
            'product' => $product,
            'prodcats' => $prodcats,
            'teams' => $teams,
            'teamurl' => $teamurl,
            'carousel1' => $carousel1,
            'carousel2' => $carousel2,
            'carousel3' => $carousel3,
            'carousel4' => $carousel4,
            'carousel5' => $carousel5,
            'carousel6' => $carousel6,
            'buttons' => $buttons,       
        ]);
    }

    public function contacts(){
        $setups = DB::table('setups')->first();       
        if(!empty($setups)){ 
            $socials = explode(',',$setups->social);
            $icons = explode(',',$setups->social);
                    foreach ($icons as $icon){
                        $icon = explode (',', $icon);
                     
                    }
                }else{ 
                    $socials = [];
                    $icons = [];   
        }
        $cats = DB::table('categories')->where('status', 'on')->get();        

        $carousel1 = DB::table('contents')->where('category','carousel1')->first();
        $carousel2 = DB::table('contents')->where('category','carousel2')->first();
        $carousel3 = DB::table('contents')->where('category','carousel3')->first();
        $carousel4 = DB::table('contents')->where('category','carousel4')->first();
        $carousel5 = DB::table('contents')->where('category','carousel5')->first();
        $carousel6 = DB::table('contents')->where('category','carousel6')->first();

        $about = DB::table('contents')->where('category','aboutus')->first();
        $about->slug = DB::table('categories')->where('title','aboutus')->value('slug');
        $services = DB::table('services')->where('status','on')->get();
        $services->slug = DB::table('categories')->where('title','services')->value('slug');
        $product = DB::table('products')->where('status','on')->get();
            foreach($product as $prod){
                $prod->class = DB::table('prodcats')->where('title',$prod->category)->value('slug');
            }
        $product->slug = DB::table('categories')->where('title','products')->value('slug');
       
        $prodcats = DB::table('prodcats')->where('status','on')->get(); 

    
        $buttons = DB::table('buttons')->where('status','on')->get();
      
        $teams = DB::table('teams')->where('status','on')->get(); 
            foreach($teams as $team){
                $teamurl = explode(',', $team->social);
            }
        
        $teams->slug = DB::table('categories')->where('title','teams')->value('slug');

        return view ('frontend.dropdown.contact', [
            'setups' => $setups,
            'socials' => $socials,
            'icons' => $icons,
            'cats' => $cats,
            'about' => $about,
            'services' => $services,
            'product' => $product,
            'prodcats' => $prodcats,
            'teams' => $teams,
            'teamurl' => $teamurl,
            'carousel1' => $carousel1,
            'carousel2' => $carousel2,
            'carousel3' => $carousel3,
            'carousel4' => $carousel4,
            'carousel5' => $carousel5,
            'carousel6' => $carousel6,
            'buttons' => $buttons,       
        ]);
    }

   
}
