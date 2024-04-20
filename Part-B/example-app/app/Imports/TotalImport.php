<?php

namespace App\Imports;

use App\Models\Totalupload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Http\Request;

class TotalImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Totalupload([
            'co'=>$row['co'],
            'marks'=>$row['marks'],
            'percentage'=>$row['percentage'],
            
        ]);
        
        
    }
}
