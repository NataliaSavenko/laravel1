<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

use stdClass;

class MainController extends Controller
{
    function index() : View
    {
       
      // $category=new Category();
       // $category->name='Category4';
       // $category->descriptions='descriptionCategory4';
       // $category->save();
       $categories=Category::all();
     
       //dd($categories);
      // dd($categories->id);
        $title='Main page';
      
        
        return view('index', compact('title','categories'));
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



}







