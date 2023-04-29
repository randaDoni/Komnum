<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function welcome(){
        return view('input.welcome');
    }
    public function index()
    {
        return view('input.index');
    }
    public function submit(Request $request)
    {
        $count = $request->input('count');
        return view('input.submit', compact('count'));
    }
    public function save(Request $request)
    {
        $hari = $request->input('hari');
        $tinggi = $request->input('tinggi');
        $prediksi = $request->input('prediksi');
        $jumlah_hari = count($hari);      
        $result = 0;
        for ($i = 0; $i < $jumlah_hari; $i++) {
            $term = $tinggi[$i];
            for ($j = 0; $j < $jumlah_hari; $j++) {
                if ($j != $i) {
                    $term *= ($prediksi - $hari[$j]) / ($hari[$i] - $hari[$j]);
                }
            }
            $result += $term;
        }
        

        return view('input.hasil',['hasil'=>$result, 'jumlah_hari'=>$prediksi]);
    }

}
