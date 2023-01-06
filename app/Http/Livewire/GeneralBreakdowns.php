<?php

namespace App\Http\Livewire;

use App\Exports\BreakdownExport;
use App\Exports\testExport;
use App\Models\Fieldequip;
use App\Models\Vendor;
use http\Client\Response;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\Breakdown;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Session\Session;
use Livewire\WithFileUploads;

use Illuminate\Http\Request;

class GeneralBreakdowns extends Component
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
        $Notified_By,$Calibration_by,$Verification_by,$Service_by,$IDn,$Yr,
        $Status,$type,$State,$Breakdown_date, $Breakdown_problem, $Breakdown_parts, $Description, $Complete_date, $Action_by, $Reviewed_by, $Remarks, $breakdown_id, $file;
    public $isOpen = 0;
    public $allowPrint= 0;
    public $isimpOpen = 0;
    public $Identification_No;
    public $isexpOpen = 0;

    use WithFileUploads;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render(Request $request)
    {
        $session = new Session();
//paginate this

        $id = $request->id;

        $data = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')
            ->where('fieldequips.type', '=', $id)
            ->paginate(5);

        return view('livewire.generalbreakdowns',compact('data'));
    }
    public function print()
    {
        return redirect()->route('fieldequips');
    }
    public function create()
    {

        $this->openModal();
    }
    public function createimp()
    {

        $this->openimpModal();
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
    public function alter()
    {
        $session = new Session();
        Fieldequip::updateorCreate(['Identification_No' => $session->get('idno')], [
            'State' => 'Breakdown',]);

        $this->closeimpModal();
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
    public function edit($id)
    {
        $session = new Session();
        $breakdown = Breakdown::findOrFail($id);
        $this->breakdown_id = $id;
        $this->Identification_No =  $breakdown->Identification_No;
        $this->Breakdown_date = $breakdown->Breakdown_date;
        $this->Breakdown_problem = $breakdown->Breakdown_problem;
        $this->Breakdown_parts = $breakdown->Breakdown_parts;
        $this->Description = $breakdown->Description;
        $this->Complete_date =$breakdown->Complete_date;
        $this->Action_by = $breakdown->Action_by;
        $this->Reviewed_by = $breakdown->Reviewed_by;
        $this->Remarks = $breakdown->Remarks;


        $this->openModal();

    }
    public function store(Request $request)
    {
        $this->validate([
            'Identification_No' => 'required|exists:fieldequips,Identification_No',
            'Breakdown_date' => 'required',
            'Breakdown_problem' => 'required',

        ]);




        Breakdown::updateOrCreate(['id' => $this->breakdown_id], [
            'Identification_No' => $this->Identification_No,
            'Breakdown_date' => $this->Breakdown_date,
            'Breakdown_problem' => $this->Breakdown_problem,
            'Breakdown_parts' => $this->Breakdown_parts,
            'Description' => $this->Description,
            'Complete_date' => $this->Complete_date,
            'Action_by' => $this->Action_by,
            'Reviewed_by' => $this->Reviewed_by,
            'Remarks' => $this->Remarks,

        ]);
        Fieldequip::updateorCreate(['Identification_No' => $this->Identification_No], [
            'State' => 'Intact',]);



        session()->flash('message',
            $this->breakdown_id ? 'Breakdowns Updated Successfully.' : 'Breakdowns Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();


    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){

        $this->Identification_No = '';
        $this->Breakdown_date = '';
        $this->Breakdown_problem = '';
        $this->Breakdown_parts = '';
        $this->Description = '';
        $this->Complete_date = '';
        $this->Action_by = '';
        $this->Reviewed_by = '';
        $this->Remarks = '';
        $this->breakdown_id = '';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function keep(Request $request)
    {
        //get id from the url
        $id = $request->id.'.'.$request->file->extension();
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        //get segment 2 from url

        $previous = url()->previous();
        $lastChar = substr($previous, -1);

        $segment = $request->segment(1);
Log::error($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $request->file->move(public_path('uploads'),  $id);



            return back()
                ->with('success','You have successfully upload file.');
        } else {
            return back()
                ->with('error','Error');

        }
    }
  public function download($id){

        $file_path = public_path('uploads/'.$id.".pdf");
        return response()->download($file_path);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Breakdown::findOrFail($id)->delete();
        session()->flash('message', 'Breakdowns Record Deleted Successfully.');
    }
    public function search(Request $request)
    {

        $output1="";

        $previous = url()->previous();
        $id= substr($previous, -1);

        $array =$request->search3;
        $data =  $data = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')
            ->where(function($query) use ($array,$id){
                $query->where('breakdowns.Identification_No', 'like', '%' . $array . '%')
                    ->where('fieldequips.type', '=',$id );
            })->orWhere(function($query)use ($array,$id){
                $query->where('fieldequips.Equipment_Name', 'like', '%' . $array . '%')
                    ->where('fieldequips.type', '=',$id );
            })
            ->orWhere(function($query)use ($array,$id){
                $query->where('breakdowns.Breakdown_date', 'like', '%' . $array . '%')
                    ->where('fieldequips.type', '=',$id );
            })->orWhere(function($query)use ($array,$id){
                $query->where('breakdowns.Description', 'like', '%' . $array . '%')
                    ->where('fieldequips.type', '=',$id );
            })
            ->paginate(5);




        Log::critical($data);



        foreach($data as $fieldequip){


            $output1 .= ' <tr>
                            <td class="border px-4 py-2">'.$fieldequip->Equipment_Name.'</td>
                            <td class="border px-4 py-2">'. $fieldequip->Breakdown_date .'</td>
                            <td class="border px-4 py-2" >'. $fieldequip->Breakdown_problem .'</td>
                            <td class="border px-4 py-2">'. $fieldequip->Breakdown_parts.'</td>
                            <td class="border px-4 py-2 max-w-lg">'. $fieldequip->Description .'</td>
                            <td class="border px-4 py-2">'.$fieldequip->Complete_date .'</td>
                            <td class="border px-4 py-2">

                                    <div class="flex flex-col-reverse">
                                        <dt class="text-sm font-medium text-slate-600">'.$fieldequip->Action_by .'</dt>
                                        <dd class="text-xs text-slate-500">Action by</dd>
                                    </div>
                                    <br>
                                    <div class="flex flex-col-reverse">
                                        <dt class="text-sm font-medium text-slate-600">'. $fieldequip->Reviewed_by .'</dt>
                                        <dd class="text-xs text-slate-500">Reviewed_by</dd>
                                    </div>


                            </td>


                            <td class="border px-4 py-2">'. $fieldequip->Remarks .'</td>

                            <td class="border py-2 p-4">
                                <div class="p-2">
                                    <button wire:click="edit('. $fieldequip->id .')" class="bg-blue-500 hover:bg-blue-700 text-xs text-white font-bold py-2 px-3 rounded">Edit</button>

                                    <button wire:click="delete('. $fieldequip->id .')" class="bg-red-500 hover:bg-red-700 text-xs text-white font-bold py-2 px-4 rounded">Delete</button>
                                    <div>';

            $matchThese = ['id'=>$fieldequip->id];

            $output1 .=' <form action="'.route('file.keep',$matchThese).'" method="POST" enctype="multipart/form-data">

                                            <input
                                                type="file"
                                                name="file"
                                                id="inputFile"
                                                class="form-control pt-2 pl-2 -mx-2 text-xs  font-bold  rounded ">
                                            <div class = "pt-1">
                                            <button type="submit" class="btn btn-success bg-green-500 hover:bg-green-700 text-xs py-1 px-4 font-bold w-1/3 rounded">Upload</button>
                                            <button wire:click="download('. $fieldequip->id .')" class="bg-purple-500 hover:bg-purple-700 text-xs py-1 px-4 font-bold rounded">Download</button>

                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </td>
                        </tr>';




        }


        return response($output1);
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
    public function closeexpModal()
    {
        $this->isexpOpen = false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function gxport(Request $request)
    {
        $IDn = $this->IDn;
        $Yr = $this->Yr;

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
        return Excel::download(new BreakdownExport($lastChar,$IDn,$Yr), 'Breakdown.xlsx');


    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function togxport()
    {



        return redirect()->route('gxport');
    }

}

