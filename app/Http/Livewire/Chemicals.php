<?php

namespace App\Http\Livewire;

use App\Exports\chemicalselExport;
use App\Exports\equipExport;
use App\Exports\FieldequipsExport;
use App\Exports\ChemicalsExport;

use App\Exports\testExport;
use App\Imports\FieldequipImport;
use App\Imports\ChemicalsImport;
use App\Models\Chemical;
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




class Chemicals extends Component
{
    public $chemicals;
    public $Chemical_Name,$Concentration, $Lot_No,$Product_No,$CAS_No,$Brand,$Packing_size,$Quantity,$Received_Date,$Expired_Date,$Bottle_ID,$Formula,$Location,$State,$chem_id,$Year,$Pr;
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

                if (($user->currentTeam->id == 1)) {

                $matchThese = ['State' => '1'];
                $data = Chemical::where($matchThese)->paginate(15);
                $currentPage='Chemical Reagent'; }
        else if (($user->currentTeam->id == 2)) {


        $matchThese = ['State' => '2'];
        $data = Chemical::where($matchThese)->paginate(15);
        $currentPage='Fields Reagent'; }
        else{abort(401,'You no team');}



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


        return view('livewire.chemicals',['data' => $data]);

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
        return redirect()->route('cexport');
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

        $this->Chemical_Name = '';
        $this->Concentration = '';
        $this->Lot_No = '';
        $this->Product_No = '';
        $this->CAS_No = '';
        $this->Formula = '';
        $this->Brand = '';
        $this->Packing_size = '';
        $this->Quantity = '';
        $this->Received_Date = '';
        $this->Expired_Date = '';
        $this->Location = '';
        $this->Bottle_ID = '';

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function fimport(Request $req){
        Excel::import(new ChemicalsImport(),$req->file('field_file'));
        return back()->withErrors(['msg' => 'The Message']);

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function export()
    {
        return Excel::download(new ChemicalsExport, 'Chemical Reagent.xlsx');
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
        return Excel::download(new chemicalselExport($lastChar,$Yr,$Pr), 'Chemical reagent List.xlsx');


    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store(Request $request)
    {
        $this->validate([
            'Chemical_Name' => 'required',
            'Lot_No' => 'required',
                        ]);

        $previous = url()->previous();
        $lastChar = substr($previous, -1);



        Chemical::updateOrCreate(['id' => $this->chem_id], [
            'Chemical_Name' => $this->Chemical_Name,
            'Concentration' => $this->Concentration,
            'Lot_No' => $this->Lot_No,
            'Product_No' => $this->Product_No,
            'CAS_No' => $this->CAS_No,
            'Formula' => $this->Formula,
            'Brand' => $this->Brand,
            'Packing_size' => $this->Packing_size,
            'Quantity' => $this->Quantity,
            'Received_Date' => $this->Received_Date,
            'Expired_Date' => $this->Expired_Date,
            'Location' => $this->Location,
            'Bottle_ID' => $this->Bottle_ID,
            'State'=> $lastChar,



        ]);

        session()->flash('message',
            $this->chem_id ? 'Chemicals Updated Successfully.' : 'Equipment Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($chem_id)
    {

        $fieldequip = Chemical::findOrFail($chem_id);
        $this->chem_id = $chem_id;
        $this->Chemical_Name = $fieldequip->Chemical_Name;
        $this->Concentration = $fieldequip->Concentration;
        $this->Lot_No = $fieldequip->Lot_No;
        $this->Product_No = $fieldequip->Product_No;
        $this->CAS_No = $fieldequip->CAS_No;
        $this->Formula = $fieldequip->Formula;
        $this->Brand = $fieldequip->Brand;
        $this->Packing_size = $fieldequip->Packing_size;
        $this->Quantity = $fieldequip->Quantity;
        $this->Received_Date = $fieldequip->Received_Date;
        $this->Expired_Date = $fieldequip->Expired_Date;
        $this->Location = $fieldequip->Location;
        $this->Bottle_ID = $fieldequip->Bottle_ID;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($chem_id)
    {
        Chemical::find($chem_id)->delete();
        session()->flash('message', 'Chemical Reagent Deleted Successfully.');

    }
    public function download(){
        $path=public_path('excel/Chemical Reagent Format.xlsx');
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
        $data = Chemical::where('Chemical_Name', 'like', '%' . $request->search9 . '%')
            ->orwhere('Lot_No', 'like', '%' . $request->search9 . '%')
            ->orwhere('Brand', 'like', '%' . $request->search9 . '%')->where(['State' => '1'])->paginate(15);
        $array =$request->search9;
        switch ($lastChar){
            case 1:
                if (!($user->currentTeam->id == 1)) {
                    abort(401,'You no team');
                }
                log::info($lastChar);
                $matchThese = ['type' => '1'];
                $data = Chemical::where(function($query) use ($array){
                    $query->where('Chemical_Name', 'like', '%' . $array . '%')
                        ->where(['State' => '1']);
                })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Lot_No', 'like', '%' . $array . '%')
                            ->where(['State' => '1']);
                    })
                    ->orWhere(function($query)use ($array){
                        $query->where('Brand', 'like', '%' . $array . '%')
                            ->where(['State' => '1']);
                    })->paginate(15);
                break;
            case 2:
                if (!($user->currentTeam->id == 2)) {
                    abort(401,'You no team');
                }
                log::info($lastChar);
                $matchThese = ['type' => '2'];
                $data = Chemical::where(function($query) use ($array){
                    $query->where('Chemical_Name', 'like', '%' . $array . '%')
                        ->where(['State' => '2']);
                })
                    ->orWhere(function($query)use ($array) {
                        $query->where('Lot_No', 'like', '%' . $array . '%')
                            ->where(['State' => '2']);
                    })
                    ->orWhere(function($query)use ($array){
                        $query->where('Brand', 'like', '%' . $array . '%')
                            ->where(['State' => '2']);
                    })->paginate(15);
                break;
        }



        foreach($data as $fieldequip) {

                $output.= '<tr>
                        <td class="border px-4 py-2">'. $fieldequip->Chemical_Name .'</td>

                        <td class="border px-4 py-2" >'. $fieldequip->Lot_No .'</td>
                        <td class="border px-4 py-2">'. $fieldequip->Formula .'</td>
                        <td class="border px-4 py-2">'. $fieldequip->Brand .'</td>
                        <td class="border px-4 py-2">'. $fieldequip->Packing_size .'</td>
                        <td class="border px-4 py-2">'. $fieldequip->Quantity .'</td>
                        <td class="border px-4 py-2">'. $fieldequip->Location .'</td>
                       ';





            $output .= '
                      <td class="border px-6 py-2 p-4">
                            <div class="p-2">
                            <button wire:click="edit('. $fieldequip->id.')" class="bg-blue-500 hover:bg-blue-700 text-xs text-white font-bold py-2 px-3 rounded">Edit</button>
                            <button wire:click="toreport('. $fieldequip->id .')"  class="bg-green-500 hover:bg-green-700 text-xs text-white font-bold py-2 px-3 rounded">View</button>
                                <button wire:click="delete('. $fieldequip->id .')" class="bg-red-500 hover:bg-red-700 text-xs text-white font-bold py-2 px-4 rounded">Delete</button>
                            </div>

                        </td>
                    </tr>';




        }


return response($output);
        }





}

