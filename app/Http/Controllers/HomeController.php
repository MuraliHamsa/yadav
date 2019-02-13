<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(request $request){

    $post = DB::table('products')->get();

   

    return view('/welcome',['post'=>$post]);
    }
    public function homepage(){

    	return view('/index');
    }
    
    public function about(request $request){

    $post = DB::table('abouts')->get();
    $post1 = DB::table('products')->get();
    

   

    return view('/about',['post'=>$post,'post1'=>$post1]);
    }
  
  public function eventpage(request $request){

    $post = DB::table('eventbanners')->get();
    $post1 = DB::table('products')->get();
    $cat = DB::table('eventcategories')->get();

       if($request->id == null){
         $service = DB::table('eventpages')->where('cat_id',1)->get();
        $arch = DB::table('eventarchives')->where('cate_id',1)->get();
        
           }
        else{
         
         $service = DB::table('eventpages')->where('cat_id',$request->id)->get();
        $arch = DB::table('eventarchives')->where('cate_id',$request->id)->get();

         }




    return view('/event',['post'=>$post,'post1'=>$post1,'cat'=>$cat,'service'=>$service,'arch'=>$arch]);

  }

    public function serve(request $request){
                 
         $post = DB::table('services')->get();
         $cat = DB::table('categories')->get();
         if($request->id == null){
         $pdf = DB::table('uploadpdfs')->where('categories',5)->get();
         $service = DB::table('typeofreports')->where('cat_id',5)->get();
           }else{
         $pdf = DB::table('uploadpdfs')->where('categories',$request->id)->get();
         $service = DB::table('typeofreports')->where('cat_id',$request->id)->get();
         }
         return view('/service',['post'=>$post,'cat'=>$cat,'pdf'=>$pdf,'service'=>$service]);
    }
 public function bizpage(request $request){
                 
         $post = DB::table('bpages')->get();
         $cat = DB::table('bcategories')->get();
         $catimage1 = DB::table('bcatimages')->where('bcat_id',1)->get();
         $catimage2 = DB::table('bcatimages')->where('bcat_id',2)->get();
         $catimage3 = DB::table('bcatimages')->where('bcat_id',3)->get();
         $catimage4 = DB::table('bcatimages')->where('bcat_id',4)->get();
         $catimage5 = DB::table('bcatimages')->where('bcat_id',5)->get();
         $catimage6 = DB::table('bcatimages')->where('bcat_id',6)->get();
         $catimage7 = DB::table('bcatimages')->where('bcat_id',7)->get();
         


         
         return view('/biz',['post'=>$post,'cat'=>$cat,'cat1'=>$catimage1,'cat2'=>$catimage2,'cat3'=>$catimage3,'cat4'=>$catimage4,'cat5'=>$catimage5,'cat6'=>$catimage6,'cat7'=>$catimage7]);
    }
   public function con(){

    return view('/contact');
   } 
public function biztalk(request $request){

         $post = DB::table('biztalkbanners')->get();
         $cat = DB::table('biztalkcategories')->get();
         if($request->id == null){
         $service = DB::table('biztalksvideos')->where('cat_id',5)->get();
           }else{
       
         $service = DB::table('biztalksvideos')->where('cat_id',$request->id)->get();
         }
         return view('/biztalks',['post'=>$post,'cat'=>$cat,'service'=>$service]);
}
}
