<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoModel;
use App\Models\Dynamic_que;
use Alert;
class HomeController extends Controller
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
        $que=CoModel::get();
        return view('que1',compact('que'));

    }

    public function save(Request $req)
    {
        $input = [
            'totalque' => $req->input('totalque'),
            'totalco' => $req->input('totalco'),
            'co' => $req->input('co'),
            'marks' => $req->input('marks'),
        ];
        $member=Dynamic_que::create($input);
        Alert::success('Data Saved', 'Question 1 Completed');
        return redirect()->route('que2');

    }

}
