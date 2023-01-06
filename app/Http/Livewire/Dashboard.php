<?php
namespace App\Http\Livewire;

use App\Exports\equipExport;
use App\Exports\FieldequipsExport;
use App\Exports\testExport;
use App\Imports\FieldequipImport;
use App\Imports\FieldequipsImport;

use App\Models\Breakdown;
use App\Models\Report;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use App\Models\Fieldequip;
use Laravel\Jetstream\HasTeams;
use App\Models\User;
use App\Models\Vendor;
use Symfony\Component\HttpFoundation\Session\Session;




class Dashboard extends Component
{
public $fieldequips, $Location, $Equipment_Name,$category,$Serial_No
,$Software_Version
,$Manufacturer_Name
,$Supplier_Name,$Supplier_Contact,$Supplier_Email
,$classification,
$date_received,
$Service_date,
$Operation_Section,
$Manual_Location,
$Authorized_User,
$equip_limit,
$Technical_Info,
$Calibration,$Calib_date,$Preventive,$Preven_date,$Internal,$Int_date,$External,$Ext_date,$Verification,$Ver_date,
$Executor,
$Registrant,
$Registrant_date,
$Authorizer,
$Authorized_date,
$Declaration,
$Declaration_date,
$Comment,
$Comment_Approver,
$fieldequipz,
$Comment_Approval_date,
$Notified_By,$Calibration_by,$Verification_by,$Service_by,
$Status,$type,$Year,$Pr;

public $currentPage;
public $isOpen = 0;
public $isexpOpen = 0;
public $isimpOpen = 0;
public $Identification_No;
public $segment;


/**
* The attributes that are mass assignable.
*
*
* @var array
*/
public function render(Request $request)
{

$segment = $request->segment(2);
$vendor = Vendor::pluck('vendor_name');
$user = $request->user();


$matchThese = ['Status' => 'Active'];
$data = Fieldequip::where($matchThese)->get();
$num = $data->count();


//return compact$data


return view(['data' => $num]);

}
}
