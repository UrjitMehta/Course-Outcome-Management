<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoModel;
use App\Models\Dynamic_que3;
use Alert;
class Que3Controller extends Controller
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

        $que=CoModel::get();
        return view('que3',compact('que'));

    }

    public function save(Request $req)
    {
        $input = [
            'totalque' => $req->input('totalque'),
            'totalco' => $req->input('totalco'),
            'co' => $req->input('co'),
            'marks' => $req->input('marks'),
        ];
        $member=Dynamic_que3::create($input);
        Alert::success('Data Saved', 'Question 3 Completed');
        return redirect()->route('excel');

    }

}
