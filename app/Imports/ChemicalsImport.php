<?php

namespace App\Imports;

use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\Shared;
use App\Models\Chemical;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ChemicalsImport implements ToCollection,  WithHeadingRow,WithValidation
{
    /**
    * @param Collection $collection
    *
    *
    */

    public function collection(Collection $rows)
    {

        $previous = url()->previous();
        Log::info($previous);
        $lastChar = substr($previous, -1);

        foreach($rows as $row){

            $dt_rc = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Received_Date']);
            $sc_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Expired_Date']);

            $data=[
            "Chemical_Name" => $row['Chemical_Name'],
            "Concentration" => $row['Concentration'],
            'Lot_No' => $row['Lot_No'],
            'Product_No'=>$row['Product_No'],
            'CAS_No'=>$row['CAS_No'],
            'Formula'=>$row['Formula'],
            'Brand'=>$row['Brand'],
            'Packing_size'=>$row['Packing_size'],
            'Quantity'=>$row['Quantity'],
            'Received_Date'=> date_timestamp_get($dt_rc) ? $dt_rc->format('Y-m-d') : null,
            'Expired_Date'=> date_timestamp_get($sc_dt) ? $sc_dt->format('Y-m-d') : null,
            'Location'=>$row['Location'],
            'Bottle_ID'=>$row['Bottle_ID'],
                'State'=>$lastChar
            ];

            Chemical::create($data);

        }
    }
    public function rules(): array
    {
        return[
            'Chemical_Name'=>'required',
            'Location'=>'required',

        ];

    }

}
