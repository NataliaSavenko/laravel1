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
       
        $responces=Responce::all();
        $sumRate=0;
        $num=count($responces);

for($i=0; $i<$num;$i++)
{
    $sumRate +=$responces[$i]->rate;

}
$avgRate=$sumRate/count($responces);


        
        return view('admin/responces/index', compact('responces','num','avgRate'));
    }

   




    public function create()
    {
        
       
     
        return view('admin.responces.create');

        
    }



   
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:2|max:15',
'content'=>'required|min:10|max:200',
'rate'=>'required|min:1|max:5',
        ]);

        Responce::create($request->all());
        return to_route('responces.index');



    }

   
   
  







    public function show(string $id)
    {
        //
    }



   
    

}