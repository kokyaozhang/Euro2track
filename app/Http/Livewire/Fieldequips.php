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




class Fieldequips extends Component
{
    public $fieldequips, $Location, $Equipment_Name,$category,$Serial_No
        ,$Software_Version
        ,$Manufacturer_Name
        ,$Supplier_Name
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
    public $idzz = 0;
    public $isexpOpen = 0;
    public $ismxpOpen = 0;
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
        $matchThese = ['type' => ''];
        switch ($segment){
            case 1:
                if (!($user->currentTeam->id == 1)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '1'];
                $data = Fieldequip::where($matchThese)->paginate(5);
                $currentPage='Fields Equipment';
                break;
            case 2:
                if (!($user->currentTeam->id == 1)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '2'];
                $data = Fieldequip::where($matchThese)->paginate(5);
                $currentPage="Fields Equipment";
                break;
            case 3:
                if (!($user->currentTeam->id == 1)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '3'];
                $data = Fieldequip::where($matchThese)->paginate(5);

                break;
            case 4:
                if (!($user->currentTeam->id == 2)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '4'];
                $data = Fieldequip::where($matchThese)->paginate(5);

                break;
            case 5:
                if (!($user->currentTeam->id == 2)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '5'];
                $data = Fieldequip::where($matchThese)->paginate(5);

                break;
            case 6:
                if (!($user->currentTeam->id == 2)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '6'];
                $data = Fieldequip::where($matchThese)->paginate(5);

                break;
            case 7:
                if (!($user->currentTeam->id == 3)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '7'];
                $data = Fieldequip::where($matchThese)->paginate(5);

                break;
            case 8:
                if (!($user->currentTeam->id == 3)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '8'];
                $data = Fieldequip::where($matchThese)->paginate(5);

                break;
            case 9:
                if (!($user->currentTeam->id == 3)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '9'];
                $data = Fieldequip::where($matchThese)->paginate(5);

                break;
                //if all condition didnt e

        }


        $matchThese = ['type' => $segment];

        $data = Fieldequip::where($matchThese)->paginate(5);
        if ($user->currentTeam->id == 1) {
            $team = Team::find(1);
            if(!($user->hasTeamPermission($team,'read'))){
                abort(403,'You are not authorized to view this page');

            }
        }elseif ($user->currentTeam->id == 2) {
            $team = Team::find(2);
            if(!($user->hasTeamPermission($team,'read'))){
                abort(403,'You are not authorized to view this page');

            }

        }
        elseif ($user->currentTeam->id == 3) {
            $team = Team::find(3);
            if (!($user->hasTeamPermission($team, 'read'))) {
                abort(403, 'You are not authorized to view this page');

            }
        }
        //return compact$data


        return view('livewire.fieldequips',['data' => $data],['vendor' => $vendor]);

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function geturli(Request $request, $hex){
        return 'Fieldequip '.$hex;
    }
    public function toreport($idno)
    {
        return redirect()->route('report')->with([ 'idno' => $idno ]);
    }
    public function tobreakdown($idno)
    {
        $session = new Session();
        $session->set('idno', $idno);
        return redirect()->route('breakdowns');
    }
    public function tocalib($idno)
    {
        $session = new Session();
        $session->set('idno', $idno);
        return redirect()->route('gcalibrations');
    }
    public function togserv($idno)
    {
        $session = new Session();
        $session->set('idno', $idno);
        return redirect()->route('genservices');
    }
    public function returnseg(Request $request)
    {

        return $request->segment(2);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function toexport()
    {
        return redirect()->route('export');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function todxport()
    {



        return redirect()->route('dxport');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function topxport()
    {
        $Yr = $this->Year;
     $Pr = $this->Pr;

        return redirect()->route('pxport')->with(['Yr' => $Yr,'Pr' => $Pr]);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function tomxport()
    {
        //Yr = wire:model="Year"
        //Pr = wire:model="Pr"
        $Yr = $this->Year;
        $Pr = $this->Pr;

//redirect and pass Year and Pr to url
        return redirect()->route('mxport',['Yr'=>$Yr],['Pr'=>$Pr] );

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function createimp()
    {

        $this->openimpModal();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function createexp()
    {

        $this->openexpModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openexpModal()
    {
        $this->isexpOpen = true;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function createmxp($idzz)
    {

        $this->openmxpModal($idzz);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openmxpModal($idzz)
    {
        $this->ismxpOpen = true;
        $this->idzz = $idzz;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeexpModal()
    {
        $this->isexpOpen = false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closemxpModal()
    {
        $this->ismxpOpen = false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openimpModal()
    {
        $this->isimpOpen = true;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeimpModal()
    {
        $this->isimpOpen = false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {

        $this->isOpen = false;

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){

        $this->Equipment_Name = '';
        $this->Location = '';
        $this->Identification_No = '';
        $this->category = '';
        $this->Serial_No = '';
        $this->Software_Version = '';
        $this->Manufacturer_Name = '';
        $this->Supplier_Name = '';
        $this->classification = '';
        $this->date_received = '';
        $this->Service_date = '';
        $this->Operation_Section = '';
        $this->Manual_Location = '';
        $this->Authorized_User = '';
        $this->equip_limit = '';
        $this->Technical_Info = '';

        $this->Calibration = '';
        $this->Calib_date = '';
        $this->Preventive = '';
        $this->Preven_date = '';
        $this->Internal = '';
        $this->Int_date = '';
        $this->External = '';
        $this->Ext_date = '';
        $this->Verification = '';
        $this->Ver_date = '';
        $this->Calibration_by = '';
        $this->Verification_by = '';
        $this->Service_by = '';
        $this->Registrant = '';
        $this->Registrant_date = '';
        $this->Authorizer = '';
        $this->Authorized_date = '';
        $this->Declaration = '';
        $this->Declaration_date = '';
        $this->Comment = '';
        $this->Comment_Approver = '';
        $this->Comment_Approval_date = '';
        $this->Notified_By = '';
        $this->Status = '';

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function fimport(Request $req){
        Excel::import(new FieldequipsImport(),$req->file('field_file'));
        return back()->withErrors(['msg' => 'The Message']);

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function export()
    {
        return Excel::download(new FieldequipsExport, 'Equipments.xlsx');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function dxport(Request $request)
    {
        $previous = url()->previous();
        $lastChar = substr($previous, -1);

        //set excel style
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];
        //download excel with style
        return Excel::download(new testExport($lastChar), 'users.xlsx');


    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function pxport(Request $request)
    {
    //get Yr data
    $Yr = $request->input('Yr');
    //Log yr
    Log::info($Yr);
        $year = $this->Year;
        $Pr = $this->Pr;
        $previous = url()->previous();
        $lastChar = substr($previous, -1);

        //set excel style
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];
        //download excel with style
        return Excel::download(new testExport($lastChar,$year,$Pr), 'users.xlsx');


    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function mxport(Request $request)
    {

//get Yr data from wire model
        $Yr = $this->Year;
        $Pr = $this->Pr;

        $previous = url()->previous();
        $lastChar = substr($previous, -1);

        //set excel style
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];
        //download excel with style
        return Excel::download(new equipExport($lastChar,$Yr,$Pr), 'Testing and Measurement Instrument Active List.xlsx');


    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store(Request $request)
    {
        $this->validate([
            'Identification_No' => 'required',
            'Equipment_Name' => 'required',
        ]);

        $previous = url()->previous();
        $lastChar = substr($previous, -1);

        $user = Vendor::where('vendor_name', '=', $this->Supplier_Email)->first();
        if ($user !== null) {
            Vendor::Create(['vendor_name'=>$this->Supplier_Name]);
        }

        Fieldequip::updateOrCreate(['Identification_No' => $this->Identification_No], [
            'Equipment_Name' => $this->Equipment_Name,
            'Location' => $this->Location,
            'category'=>$this->category,
            'Serial_No'=>$this->Serial_No,
'Software_Version'=>$this->Software_Version,
'Manufacturer_Name'=>$this->Manufacturer_Name,
'Supplier_Name'=>$this->Supplier_Name,

'classification'=>$this->classification,
'date_received'=>$this->date_received,
'Service_date'=>$this->Service_date,
'Operation_Section'=>$this->Operation_Section,
'Manual_Location'=>$this->Manual_Location,
'Authorized_User'=>$this->Authorized_User,
'equip_limit'=>$this->equip_limit,
'Technical_Info'=>$this->Technical_Info,
'Calibration'=>$this->Calibration,
'Calib_date'=>$this->Calib_date,
'Preventive'=>$this->Preventive,
'Preven_date'=>$this->Preven_date,
'Internal'=>$this->Internal,
'Int_date'=>$this->Int_date,
'External'=>$this->External,
'Ext_date'=>$this->Ext_date,
'Verification'=>$this->Verification,
'Ver_date'=>$this->Ver_date,
'Calibration_by'=>$this->Calibration_by,
'Verification_by'=>$this->Verification_by,
'Service_by'=>$this->Service_by,
'Registrant'=>$this->Registrant,
'Registrant_date'=>$this->Registrant_date,
'Authorizer'=>$this->Authorizer,
'Authorized_date'=>$this->Authorized_date,
'Declaration'=>$this->Declaration,
'Declaration_date'=>$this->Declaration_date,
'Comment'=>$this->Comment,
'Comment_Approver'=>$this->Comment_Approver,
'Comment_Approval_date'=>$this->Comment_Approval_date,
'Notified_By'=>$this->Notified_By,
            'Status'=>$this->Status,

            'type'=>$lastChar,
            'State'=>'Intact'
        ]);

        session()->flash('message',
            $this->Identification_No ? 'Equipment Updated Successfully.' : 'Equipment Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($Identification_No)
    {

        $fieldequip = Fieldequip::findOrFail($Identification_No);
        $this->Identification_No = $Identification_No;
        $this->Equipment_Name = $fieldequip->Equipment_Name;
        $this->Location = $fieldequip->Location;
        $this->category = $fieldequip->category;
        $this->Serial_No = $fieldequip->Serial_No;
        $this->Software_Version = $fieldequip->Software_Version;
        $this->Manufacturer_Name = $fieldequip->Manufacturer_Name;
        $this->Supplier_Name = $fieldequip->Supplier_Name;
        $this->classification = $fieldequip->classification;
        $this->date_received = $fieldequip->date_received;
        $this->Service_date = $fieldequip->Service_date;
        $this->Operation_Section = $fieldequip->Operation_Section;
        $this->Manual_Location = $fieldequip->Manual_Location;
        $this->Authorized_User = $fieldequip->Authorized_User;
        $this->equip_limit = $fieldequip->equip_limit;
        $this->Technical_Info = $fieldequip->Technical_Info;
        $this->Calibration = $fieldequip->Calibration;
        $this->Calib_date = $fieldequip->Calib_date;
        $this->Preventive = $fieldequip->Preventive;
        $this->Preven_date = $fieldequip->Preven_date;
        $this->Internal = $fieldequip->Internal;
        $this->Int_date = $fieldequip->Int_date;
        $this->External = $fieldequip->External;
        $this->Ext_date = $fieldequip->Ext_date;
        $this->Verification = $fieldequip->Verification;
        $this->Ver_date = $fieldequip->Ver_date;
        $this->Calibration_by = $fieldequip->Calibration_by;
        $this->Verification_by = $fieldequip->Verification_by;
        $this->Service_by = $fieldequip->Service_by;
        $this->Registrant = $fieldequip->Registrant;
        $this->Registrant_date = $fieldequip->Registrant_date;
        $this->Authorizer = $fieldequip->Authorizer;
        $this->Authorized_date = $fieldequip->Authorized_date;
        $this->Declaration = $fieldequip->Declaration;
        $this->Declaration_date = $fieldequip->Declaration_date;
        $this->Comment = $fieldequip->Comment;
        $this->Comment_Approver = $fieldequip->Comment_Approver;
        $this->Comment_Approval_date = $fieldequip->Comment_Approval_date;
        $this->Notified_By = $fieldequip->Notified_By;
        $this->Status = $fieldequip->Status;
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($Identification_No)
    {
        Fieldequip::find($Identification_No)->delete();
        session()->flash('message', 'Equipment Deleted Successfully.');

    }
    public function download(){
        $path=public_path('excel/excelformatprinted.xlsx');
        return response()->download($path);
    }
    public function search(Request $request)
    {

        $output="";
        $segment = $request->segment(2);
        $user = $request->user();
        $matchThese = ['type' => ''];
        $previous = url()->previous();
        $lastChar = substr($previous, -1);
        $data = Fieldequip::where('Identification_No', 'like', '%' . $request->search . '%')
            ->orwhere('Equipment_Name', 'like', '%' . $request->search . '%')
            ->orwhere('Serial_No', 'like', '%' . $request->search . '%')->where(['type' => '1'])->paginate(5);
        $array =$request->search;
        switch ($lastChar){
            case 1:
                if (!($user->currentTeam->id == 1)) {
                    abort(401,'You no team');
                }
                log::info($lastChar);
                $matchThese = ['type' => '1'];
                $data = Fieldequip::where(function($query) use ($array){
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '1']);
                })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '1']);
                    })
                    ->orWhere(function($query)use ($array){
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '1']);
                    })->paginate(5);
                break;
            case 2:
                if (!($user->currentTeam->id == 1)) {
                    abort(401,'You no team');
                }
                log::info($lastChar);
                $matchThese = ['type' => '2'];
                $data = Fieldequip::where(function($query)use ($array) {
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '2']);
                })
                    ->orWhere(function($query) use ($array){
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '2']);
                    })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '2']);
                    })->paginate(5);
                break;
            case 3:
                if (!($user->currentTeam->id == 1)) {
                    abort(401,'You no team');
                }
                log::info($lastChar);
                $matchThese = ['type' => '3'];
                $data = Fieldequip::where(function($query)use ($array) {
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '3']);
                })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '3']);
                    })
                    ->orWhere(function($query) use ($array){
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '3']);
                    })->paginate(5);
                break;
            case 4:
                log::info($lastChar);
                if (!($user->currentTeam->id == 2)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '4'];
                $data = Fieldequip::where(function($query)use ($array) {
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '4']);
                })
                    ->orWhere(function($query) use ($array){
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '4']);
                    })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '4']);
                    })->paginate(5);

                break;
            case 5:
                if (!($user->currentTeam->id == 2)) {
                    abort(401,'You no team');
                }
                log::info($lastChar);
                $matchThese = ['type' => '5'];
                $data = Fieldequip::where(function($query)use ($array) {
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '5']);
                })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '5']);
                    })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '5']);
                    })->paginate(5);

                break;
            case 6:
                log::info($lastChar);
                if (!($user->currentTeam->id == 2)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '6'];
                $data = Fieldequip::where(function($query)use ($array) {
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '6']);
                })
                    ->orWhere(function($query) use ($array){
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '6']);
                    })
                    ->orWhere(function($query) use ($array){
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '6']);
                    })->paginate(5);

                break;
            case 7:
                log::info($lastChar);
                if (!($user->currentTeam->id == 3)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '7'];
                $data = Fieldequip::where(function($query) use ($array){
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '7']);
                })
                    ->orWhere(function($query) use ($array){
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '7']);
                    })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '7']);
                    })->paginate(5);

                break;
            case 8:
                log::info($lastChar);
                if (!($user->currentTeam->id == 3)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '8'];
                $data = Fieldequip::where(function($query) use ($array){
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '8']);
                })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '8']);
                    })
                    ->orWhere(function($query) use ($array){
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '8']);
                    })->paginate(5);

                break;
            case 9:
                log::info($lastChar);
                if (!($user->currentTeam->id == 3)) {
                    abort(401,'You no team');
                }
                $matchThese = ['type' => '9'];
                $data = Fieldequip::where(function($query)use ($array) {
                    $query->where('Identification_No', 'like', '%' . $array . '%')
                        ->where(['type' => '9']);
                })
                    ->orWhere(function($query) use ($array){
                        $query->where('Equipment_Name', 'like', '%' . $array . '%')
                            ->where(['type' => '9']);
                    })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Serial_No', 'like', '%' . $array . '%')
                            ->where(['type' => '9']);
                    })->paginate(5);

                break;
            //if all condition didnt e

        }



        foreach($data as $fieldequip) {

                $output.= '<tr>
                        <td class="border px-4 py-2">'.$fieldequip->Equipment_Name.'</td>
                        <td class="border px-4 py-2" >'.$fieldequip->Identification_No.'</td>
                        <td class="border px-4 py-2">'.$fieldequip->Location.'</td>
                        <td class="border px-4 py-2">'.$fieldequip->equip_limit.'</td>


                        <td class="border px-4 py-2">
                         <ul class="list-disc">

                       ';
            if($fieldequip->Calibration  == 1&&$fieldequip->Calib_date != null)
            {
                $output .=   '<li class="pl-1 ml-1">Service('.$fieldequip->Calib_date.')</li>';}
            if($fieldequip->Preventive == 1&&$fieldequip->Preven_date != null)
            {
                $output .=   '<li class="pl-1 ml-1">Preventive Measure('.$fieldequip->Preven_date.')</li>';}
            if($fieldequip->Internal == 1&&$fieldequip->Int_date != null)
            {
                $output .=   '<li class="pl-1 ml-1">Internal Services('.$fieldequip->Int_date.')</li>';}
            if($fieldequip->External == 1&&$fieldequip->Ext_date != null)
            {
                $output .=   '<li class="pl-1 ml-1">External Service('.$fieldequip->Ext_date.')</li>';}
            if($fieldequip->Verification == 1&&$fieldequip->Ver_date != null)
            {
                $output .=   '<li class="pl-1 ml-1">Verification('.$fieldequip->Ver_date.')</li>';}




            $output .= '</ul>
                            </td>
                        <td class="border px-4 py-2">'.$fieldequip->Status.'</td>
                      <td class="border px-6 py-2 p-4">
                            <div class="p-2">
                            <button wire:click="edit('. $fieldequip->Identification_No .')" class="bg-blue-500 hover:bg-blue-700 text-xs text-white font-bold py-2 px-3 rounded">Edit</button>
                            <button wire:click="toreport('. $fieldequip->Identification_No .')"  class="bg-green-500 hover:bg-green-700 text-xs text-white font-bold py-2 px-3 rounded">View</button>
                                <button wire:click="delete('. $fieldequip->Identification_No .')" class="bg-red-500 hover:bg-red-700 text-xs text-white font-bold py-2 px-4 rounded">Delete</button>
                            </div>
                            <div class="p-2">
                            <button wire:click="tobreakdown('. $fieldequip->Identification_No .')"  class="bg-teal-500 hover:bg-teal-700 text-xs text-white font-bold py-2 px-2 rounded">Breakdowns</button>
                            <button wire:click="toreport('. $fieldequip->Identification_No .')"  class="bg-yellow-400 hover:bg-yellow-700 text-xs text-white font-bold py-2 px-2 rounded">Maintenance</button>
                            </div>
                        </td>
                    </tr>';




        }


return response($output);
        }





}

