<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Feature3 extends Controller
{
    //
    public function index()
    {
        # code...
        return view('fitur3');
    }
    public function NameExecute(Request $request)

    {
        # code...
        $data1 = $request->input1;
        $data2 = $request->input2;
        $result = [];
        for ($in2 = 0; $in2 < strlen($data2); $in2++) {
            for ($in1 = 0; $in1 < strlen($data1); $in1++) {
                if ($data2[$in2] == $data1[$in1]) {
                    $exist = false;
                    foreach ($result as $rs) {
                        if ($rs == $data1[$in1]) {
                            $exist = true;
                        }
                    }
                    if ($exist == false) {
                        array_push($result, $data1[$in1]);
                    }
                }
            }
        }
        $finalResult = (count($result) / strlen($data1)) * 100;
        return response()->json(["hasil" => $finalResult . '%']);
    }
}
