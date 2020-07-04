<?php

namespace App\Http\Controllers;
use App\pertanyaan;
use App\jawaban;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    function index(){
        $listask = pertanyaan::all();
        $countask = count($listask);
        for($x=0;$x<count($listask);$x++){
            $c = jawaban::where('id_pertanyaan',$listask[$x]["id"])->count();
            $listask[$x]["jmlh_jawaban"]=$c;
        }
        return view('frontview',[
            'listask'=>$listask,
            'countask'=>$countask
            ]);
        
    }

    function create(){
        return view('formquestion');
    }

    function store(Request $request){
        $newask = new pertanyaan;
        $newask ->judul = $request->input('judul');
        $newask ->isi = $request->input('isi');

        $newask ->save();
        $listask = pertanyaan::all();
        $countask = count($listask);
        return view('frontview',[
            'listask'=>$listask,
            'countask'=>$countask
            ]);
    }
}
