<?php

namespace App\Http\Controllers;
use App\SubmitClientForm;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public  function index(){
        $client=SubmitClientForm::all();
        
        return view('ClientList.index')->with('client2',$client); 
    }
    public function edit($id){
        $find=SubmitClientForm::find($id);
        return view('ClientList.edit')->with('edit',$find);
    }
}
