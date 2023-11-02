<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use App\Config\Databaseconnect;
use App\Models\Product;
use App\Models\Responce;
use Illuminate\Routing\Route;
use stdClass;

class MainController extends Controller
{
    function index() : View
    {
        /** @var Article $article  */
       /*  $article = Article::first();
        dd($article->getAttribute('active'));
        dd($article->active);  // __get   __set */

      // $category=new Category();
       // $category->name='Category4';
       // $category->descriptions='descriptionCategory4';
       // $category->save();
       




       $categories=Category::all();
     
      // $products=Product::all();
          // public function lastProducts()
      
            
           
         // Route::get('admin/products/index',)->name('product')->latest()->limit(5)->get()->reverse();

           
           //return $this->hasMany('App\Comment','blogitem_id')->with('userprofile')->latest()->limit(5)->get()->reverse();
   


        $title='Main page';
      
        
        return view('index', compact('title','categories'));

        return view('index', compact('title','products'));
    }


    function contacts():View
    {

    return view('contacts');

    }



    function  sendEmail (Request $request)
    {
        $request->validate(
[
'name'=>'required|min:2|max:15',

'email'=>'required|email',
'message'=>'required|min:5'
]

);
        //dump($request->all());
        //dd($request->all());
        //dd($request->name);
        
        //return 123;

$name=$request->name;

$email=$request->email;
$message=$request->message;

mail('medpreparat@ukr.net', 'Email from lar',"$name,$email,$message");

dump($request->all());
//return redirect('/contacts')->with('success','Thank you!'); //редирект по url

//return redirect()->route('contacts')->with('success','Thank you!'); //редирект по назві маршруту
return to_route('contacts')->with('success','Thank you!');  //редирект по назві маршруту !!!!
//return redirect()->back()->with('success','Thank you!');  //повернутись на попередню сторінку

}



function zajava():View
{

return view('zajava');

}

function  sendZajava (Request $request)
{
    $request->validate(
[
'name'=>'required|min:2|max:15',
'telephone'=>'regex:/^\+?38 \((\d{3})\) (\d{3})-(\d{2})-(\d{2})$/U',
'email'=>'required|email',
'age'=>'required|min:1',

]);
 
$name=$request->name;
$telephone=$request->telephone;
$email=$request->email;
$age=$request->age;
$sex=$request->sex;
$message=$request->message;
$animals=$request->input();


return to_route('zajava')->with('success','Thank you!'); 


}







function reviews():View
{
    $responces=Responce::where('id','>','1') ->get();
return view('reviews',compact('responces'));

}

function  responseS (Request $request)
{
    $request->validate(
[
 
'name'=>'required|min:2|max:15',
'content'=>'required|min:10|max:200',
'rate'=>'required|min:1|max:5',

]);
 $responce=new Responce();
//$id=$request->id;
$responce->name=$request->name;
$responce->email=$request->email;
$responce->content=$request->content;
$responce->rate=$request->rate;
$responce->save();


    

return to_route('reviews')->with('success','Thank you!'); 


}



}



