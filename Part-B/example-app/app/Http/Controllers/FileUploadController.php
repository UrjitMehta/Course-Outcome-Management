<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FileUploadImport;
use App\Models\Upload;
use Alert;
use DB;
use App\Imports\TotalImport;
use App\Models\Totalupload;

class FileUploadController extends Controller
{
    public function index(){
        //
        $members = Upload::get();
        // Alert::success('Imported Successfully', 'Import');
        return view('pages.fileUpload');
    }
    public function import1() 
    {
        $members=new Upload;
        request()->validate(['file' => 'required | mimes:xlsx']);
        Excel::import(new FileUploadImport, request()->file('file'));
        alert()->success('File Uploaded Successfully','You can generate the Bar chart now');
        return back();
    }
    public function getData()
    {
        $avg1=DB::table('uploads')->avg('p_co1');
        $avg2=DB::table('uploads')->avg('p_co2');
        $avg3=DB::table('uploads')->avg('p_co3');
        $avg4=DB::table('uploads')->avg('p_co4');
        $avg5=DB::table('uploads')->avg('p_co5');
        $arr=array($avg1,$avg2,$avg3,$avg4,$avg5);
        $labels=array("CO1","CO2","CO3","CO4","CO5");
        return view('pages.chart', compact('arr','labels'));
    }
    public function resetDB1()
    {
        $reset=Upload::query()->truncate();
         
         alert()->success('Deleted', 'Table Truncated Succesfully');
        return back();
    }
    public function import2()
    {
        $member=new Totalupload;
        request()->validate(['file' => 'required | mimes:xlsx']);
        Excel::import(new TotalImport, request()->file('file'));
        alert()->success('File Uploaded Successfully','You can generate the Bar chart now');
        return back();
    }
    public function resetDB2()
    {
        $reset=Totalupload::query()->truncate();
        alert()->success('Deleted', 'Table Truncated Succesfully');
        return back();
    }
}
