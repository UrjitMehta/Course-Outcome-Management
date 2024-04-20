<?php

namespace App\Http\Controllers;
use App\Models\Totalupload;
use App\Imports\TotalImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Totalcontroller extends Controller
{
    //
    public function import()
    {
        $member=new Totalupload;
        request()->validate(['file' => 'required | mimes:xlsx']);
        Excel::import(new TotalImport, request()->file('file'));

        return redirect('/home');

    }
}
