<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Student;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudImport;
class ImportController extends Controller
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

        $data= Student::get();
        return view('import');

    }

    public function import()
    {
        $member=new Student;
        request()->validate(['file' => 'required | mimes:xlsx']);
        Excel::import(new StudImport, request()->file('file'));
        alert()->success('Imported Successfully');
        Alert::success('Data Saved', 'Imported Successfully');
        return back();
    }

}

