<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dynamic_que;
use App\Models\Dynamic_que2;
use App\Models\Dynamic_que3;
use App\Models\Final_tbl;
use App\Models\Student;

use Alert;
class ExcelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $ques=DB::select('select * from questions');
        // return view('home',['ques'=>$ques]);

        // $mrk=DB::select('select * from marks');
        // return view('home',['mrk'=>$mrk]);

        $que=Dynamic_que::get();
        $que2=Dynamic_que2::get();
        $que3=Dynamic_que3::get();
        $stud= Student::get();
        return view('excel',compact('que','que2','que3','stud'));

    }

    public function save(Request $req)
    {
        $input = [
            'a1' => $req->input('a1'),
            'b1' => $req->input('b1'),
            'c1'=>$req->input('c1'),
            'd1'=>$req->input('d1'),
            'e1'=>$req->input('e1'),
            'f1'=>$req->input('f1'),
            'a2'=>$req->input('a2'),
            'b2'=>$req->input('b2'),
            'c2'=>$req->input('c2'),
            'a3'=>$req->input('a3'),
            'b3'=>$req->input('b3'),
        ];
        // return $input;
        Final_tbl::create($input);
        Alert::success('Data Saved', 'Data Saved Succesfully');
        return back();
    }



}
