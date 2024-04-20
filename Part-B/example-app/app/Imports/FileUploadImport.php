<?php

namespace App\Imports;

use App\Models\Upload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Http\Request;

class FileUploadImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Upload([
            
            'rollno'=>$row['rollno'],
            'co1'=>$row['co1'],
            'p_co1'=>$row['p_co1'],
            'co2'=>$row['co2'],
            'p_co2'=>$row['p_co2'],
            'co3'=>$row['co3'],
            'p_co3'=>$row['p_co3'],
            'co4'=>$row['co4'],
            'p_co4'=>$row['p_co4'],
            'co5'=>$row['co5'],
            'p_co5'=>$row['p_co5'],
        ]);
    }
}
