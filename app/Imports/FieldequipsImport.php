<?php

namespace App\Imports;

use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\Shared;
use App\Models\Fieldequip;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class FieldequipsImport implements ToCollection,  WithHeadingRow,WithValidation
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
            $reg_date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Registrant_date']);
            $dt_rc = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_received']);
            $sc_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Service_date']);
            $ac_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Authorized_date']);
            $dc_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Declaration_date']);
            $ca_dt = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['Comment_Approval_date']);
            $data=[
            "Identification_No" => $row['Identification_No'],
            "Equipment_Name" => $row['Equipment_Name'],
            'Location' => $row['Location'],
            'category'=>$row['category'],
            'Serial_No'=>$row['Serial_No'],
            'Software_Version'=>$row['Software_Version'],
            'Manufacturer_Name'=>$row['Manufacturer_Name'],
            'Supplier_Name'=>$row['Supplier_Name'],
            'classification'=>$row['classification'],
            'date_received'=> date_timestamp_get($dt_rc) ? $dt_rc->format('Y-m-d') : null,
            'Service_date'=> date_timestamp_get($sc_dt) ? $sc_dt->format('Y-m-d') : null,
            'Operation_Section'=>$row['Operation_Section'],
            'Manual_Location'=>$row['Manual_Location'],
            'Authorized_User'=>$row['Authorized_User'],
            'equip_limit'=>$row['equip_limit'],
            'Technical_Info'=>$row['Technical_Info'],
            'Calib_date'=>$row['Calibration_frequency'],
            'Preven_date'=>$row['Preventive_frequency'],
                'Int_date'=>$row['Internalservice_frequency'],
                'Ext_date'=>$row['Externalservice_frequency'],
                'Ver_date'=>$row['Verification_frequency'],
                'Calibration_by'=>$row['Calibration_by'],
                'Verification_by'=>$row['Verification_by'],
                'Service_by'=>$row['Service_by'],
                'Registrant'=>$row['Registrant'],
                'Registrant_date'=> date_timestamp_get($reg_date) ? $reg_date->format('Y-m-d') : null,
                'Authorizer'=>$row['Authorizer'],
'Authorized_date'=> date_timestamp_get($ac_dt) ? $ac_dt->format('Y-m-d') : null,
'Declaration'=>$row['Declaration'],
'Declaration_date'=> date_timestamp_get($dc_dt) ? $dc_dt->format('Y-m-d') : null,
'Comment'=>$row['Comment'],
'Comment_Approver'=>$row['Comment_Approver'],
'Comment_Approval_date'=> date_timestamp_get($ca_dt) ? $ca_dt->format('Y-m-d') : null,
'Notified_By'=>$row['Notified_By'],
            'Status'=>'Active',
                'type'=>$lastChar,
                'State'=>'Intact'
            ];

            Fieldequip::create($data);

        }
    }
    public function rules(): array
    {
        return[
            'Identification_No'=>'required',
            'Equipment_Name'=>'required',
            'Registrant_date' => 'date',
            'date_received' => 'date',
            'Service_date' => 'date',
            'Authorized_date' => 'date',
            'Declaration_date' => 'date',
            'Comment_Approval_date' => 'date',

        ];

    }

}
