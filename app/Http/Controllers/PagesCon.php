<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Crud;

class PagesCon extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function show(){        
        $crud=Crud::all();
        return view('show')
        ->with('crud',$crud);
    }
    public function add(Request $req){
        return view('add');
    }
    public function addsub(Request $req){
        $crudadd = new Crud();
        $crudadd-> name=$req->name;
        $crudadd-> phone=$req->phone;
        $crudadd-> address=$req->address;
        $crudadd-> pass=$req->pass;
        $crudadd-> save();                
        $crud = Crud::all();
        return redirect()->route('show')
        ->with('crud',$crud);
    }
    
    public function edit(Request $req){
        $crudedit = Crud::where('id',$req->id)->first();
        return view('edit')
        ->with('crudedit',$crudedit);
    }
    public function editsub(Request $req){
        $crudedit = Crud::where('id',$req->id)->first();
        $crudedit-> name=$req->name;
        $crudedit-> phone=$req->phone;
        $crudedit-> address=$req->address;
        $crudedit-> pass=$req->pass;
        $crudedit-> save();                
        $crud = Crud::all();
        return redirect()->route('show')
        ->with('crud',$crud);
    }
    public function del(Request $req){
        $cruddel = Crud::where('id',$req->id)->first();
        $cruddel-> delete();        
        $crud = Crud::all();
        return view('show')
        ->with('crud',$crud);
    }
    public function search(){
        return view('search');
    }
    public function searchsub(Request $req){  
        $formatted = implode('%',str_split($req->search)); 
        $crudsearch= Crud::where('id', $req->search)
        ->orWhere('phone', $req->search)
        ->orWhere('name', 'like', '%' .$formatted. '%')
        ->orWhere('address', 'like', '%' .$formatted. '%')->get();
        return view('search')
        ->with('crudsearch',$crudsearch);
    }
    public function editdel(Request $req){
        $crudedit = Crud::where('id',$req->id)->first();
        return view('edit')
        ->with('crudedit',$crudedit);
    }
    public function editdelsub(Request $req){
        // $crudedit = Crud::where('id',$req->id)->first();
        // $crudedit-> name=$req->name;
        // $crudedit-> phone=$req->phone;
        // $crudedit-> address=$req->address;
        // $crudedit-> pass=$req->pass;
        // $crudedit-> save();                
        // $crud = Crud::all();
        $crudedit = Crud::where('id',$req->id)
        ->where('pass',$req->typepass)->first();
        if($crudedit){
        if($req->do=="Edit"){
        return redirect()->route('edit', ['id'=>$req->id]);}
        else{return redirect()->route('del', ['id'=>$req->id]);}}
        
        // ->with('crud',$crud);
    }
}
