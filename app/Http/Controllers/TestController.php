<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $utenti = DB::table('users')->get();

        return view('record', compact('utenti'));

    }


    public function delete($id){
        $record= DB::table('users')->where("id", $id)->delete();
        return redirect()->route('delete');
    }
}
