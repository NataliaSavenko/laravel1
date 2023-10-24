<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Responce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
   
   
   
   
     public function index()
    {
       
        $arrResponses=Responce::all();
$sumRate=0;

for($i=0; $i<count($arrResponses);$i++)
{
    $sumRate +=$arrResponses[$i]->rate;

}
$avgRate=$sumRate/count($arrResponses);


       // $responces = Responce::paginate(3);
        return view('admin/responces/index', compact('arrResponses', 'avgRate'));
    }

    public function create()
    {
        return view('admin/responces/create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:2|max:15',
'content'=>'required|min:10|max:200',
'rate'=>'required|min:1|max:5',
        ]);

        Responce::create($request->all());
        return to_route('admin/responces/create');
    }

   
    public function show(string $id)
    {
        //
    }



    
   /* function  responseS (Request $request)
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
    
    
    }*/
    

    /**
     * Show the form for editing the specified resource.
     */
   /* public function edit(Responce $responce)
    {
        return view('admin/responces/edit', compact('responce'));
    }*/

    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, Responce $responce)
    {
        $request->validate([
            'name'=>'required|min:2|max:15' . $responce->id,
'content'=>'required|min:10|max:200',
'rate'=>'required|min:1|max:5',
            
        ]);

       

        $responce->update($request->all());
        return to_route('responces.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy( Responce $responce)
    {
        $responce->delete();
        return to_route('responces.index');
    }*/
}