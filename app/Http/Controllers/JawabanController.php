<?php

namespace App\Http\Controllers;
use App\pertanyaan;
use App\jawaban;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

class JawabanController extends Controller
{
    //

    function index($pertanyaan_id){
        //$askid = Route::current()->parameter('pertanyaan_id');
        try{
            //$id = intval($pertanyaan_id);
            $listanswer = jawaban::where('id_pertanyaan',$pertanyaan_id)->get();
            $listask = pertanyaan::where('id',$pertanyaan_id)->get();
            $countask = count($listanswer);
            return view('jawaban',[
            'listask'=>$listask,
            'countask'=>$countask,
            'listanswer' => $listanswer
            ]);

        }catch(Exception $e){
            return $e;
        }
    }

    function create(Request $request,$pertanyaan_id){
        try{
            $newans = new jawaban;
            $newans ->judul = $request->input('judul');
            $newans ->isi = $request->input('isi');
            $newans ->id_pertanyaan = $pertanyaan_id;
            $newans -> save();
            
            $listanswer = jawaban::where('id_pertanyaan',$pertanyaan_id)->get();
            $listask = pertanyaan::where('id',$pertanyaan_id)->get();
            $countask = count($listanswer);
            return view('jawaban',[
            'listask'=>$listask,
            'countask'=>$countask,
            'listanswer' => $listanswer
            ]);                                                                                                    
        }catch(Expection $e){
            return $e;
        }
        
    }
}
