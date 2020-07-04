<?php

namespace App\Http\Controllers;
use App\pertanyaan;
use App\jawaban;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    function index($id=0){
        if($id==0){
            $listask = pertanyaan::all();
        }else{
            $listask = pertanyaan::where('id',$id)->get();
        }
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

    function modify($id){
        $pertanyaanku = pertanyaan::find($id);
        return view('editform',[
            'pertanyaanku'=>$pertanyaanku
        ]);
    }

    function onModify(Request $request,$id){
        pertanyaan::where('id',$id)->update([
           'judul'=>$request->input('judul'),
           'isi'=>$request->input('isi') 
        ]);

        $listask = pertanyaan::where('id',$id)->get();
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
