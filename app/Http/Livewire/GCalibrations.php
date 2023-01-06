<?php

namespace App\Http\Livewire;

use App\Exports\cbExport;
use App\Exports\testExport;
use App\Models\Fieldequip;
use App\Models\Vendor;
use http\Client\Response;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\Calibration;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Session\Session;
use Livewire\WithFileUploads;

use Illuminate\Http\Request;

class GCalibrations extends Component
{
    public $fieldequips, $Identification_No,$Calibration_point,$Expired_Date,$Calibration_Date,$Next_Due_Date,$Correction_factor,$Validated_by,$Validated_Date, $calibration,$Year,$Pr,$calibration_id,$bo_date;

    public $allowPrint= 0;
    public $isimpOpen = 0;
    public $isimp2Open = 0;
    public $isOpen = 0;
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

        $data = Calibration::where('Identification_No',  $session->get('idno'))->paginate(5);
        $dent = Fieldequip::get()->where('Identification_No',  $session->get('idno'));

        return view('livewire.id_Calib',['data' => $data],['dent' => $dent]);
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
    public function createimp2()
    {

        $this->openimp2Modal();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openimp2Modal()
    {
        $this->isimp2Open = true;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeimp2Modal()
    {
        $this->isimp2Open = false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function alter()
    {
        session(['bodate' => $this->bo_date]);
        $session = new Session();

        Fieldequip::updateorCreate(['Identification_No' => $session->get('idno')], [
            'State' => 'In Calibration',]);
//for each loop



        //route to sendEmai

        $this->closeimpModal();
        return redirect()->route('sendEmail4');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function alter2()
    {

        $session = new Session();
        Fieldequip::updateorCreate(['Identification_No' => $session->get('idno')], [
            'State' => 'In Calibration',]);


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
    public function alterbo()
    {

        $session = new Session();
        Fieldequip::updateorCreate(['Identification_No' => $session->get('idno')], [
            'State' => 'Intact',]);


        $this->closeimpModal();
        return redirect()->route('sendEmail7');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function alterbo2()
    {

        $session = new Session();
        Fieldequip::updateorCreate(['Identification_No' => $session->get('idno')], [
            'State' => 'Intact',]);


        $this->closeimpModal();

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
        $calibration= Calibration::findOrFail($id);
        $this->calibration_id = $id;
        $this->Identification_No = $calibration->Identification_No;
        $this->Calibration_point = $calibration->Calibration_point;
        $this->Expired_Date = $calibration->Expired_Date;
        $this->Calibration_Date = $calibration->Calibration_Date;
        $this->Next_Due_Date = $calibration->Next_Due_Date;
        $this->Correction_factor = $calibration->Correction_factor;
        $this->Validated_by = $calibration->Validated_by;
        $this->Validated_Date = $calibration->Validated_Date;





        $this->openModal();

    }
    public function store(Request $request)
    {
        $this->validate([
            'Calibration_Date' => 'required',
        ]);



        $session = new Session();
        Calibration::updateOrCreate(['id' => $this->calibration_id], [

            'Identification_No' => $session->get('idno'),

            'Calibration_point' => $this->Calibration_point,

            'Expired_Date' => $this->Expired_Date,

            'Calibration_Date' => $this->Calibration_Date,

            'Next_Due_Date' => $this->Next_Due_Date,

            'Correction_factor' => $this->Correction_factor,

            'Validated_by' => auth()->user()->name,

            //validated date is current date
            'Validated_Date' => date('Y-m-d'),



        ]);




        session()->flash('message',
            $this->calibration_id ? 'Calibrations Updated Successfully.' : 'Calibrations Created Successfully.');

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
        $this->Calibration_point = '';
        $this->Expired_Date = '';
        $this->Calibration_Date = '';
        $this->Next_Due_Date = '';
        $this->Correction_factor = '';
        $this->Validated_by = '';
        $this->Validated_date = '';

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
            $request->file->move(public_path('calibrations'),  $id);



            return back()
                ->with('success','You have successfully upload file.');
        } else {
            return back()
                ->with('error','Error');

        }
    }
  public function download($id){

        $file_path = public_path('calibrations/'.$id.".pdf");
        return response()->download($file_path);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Calibration::findOrFail($id)->delete();
        session()->flash('message', 'Calibrations Record Deleted Successfully.');
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
    public function cxport(Request $request)
    {
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
        return Excel::download(new cbExport($lastChar,$Yr,$Pr), 'Calibrations.xlsx');


    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function tocxport()
    {



        return redirect()->route('cxport');
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
    public function search(Request $request)
    {

        $output1="";

        $previous = url()->previous();

        $session = new Session();
//paginate this
        $id = $request->id;
        $zzz = $session->get('idno');


        $array =$request->search7;
        $data =  Calibration::join('fieldequips', 'fieldequips.Identification_No', '=', 'calibrations.Identification_No')
            ->where(function($query) use ($array,$zzz){
                $query->where('calibrations.Identification_No', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })->orWhere(function($query)use ($array,$zzz){
                $query->where('fieldequips.Equipment_Name', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })
            ->orWhere(function($query)use ($array,$zzz){
                $query->where('calibrations.Calibration_Date', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })->orWhere(function($query)use ($array,$zzz){
                $query->where('calibrations.Correction_factor', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })
            ->paginate(5);




        Log::critical($data);



        foreach($data as $fieldequip){


            $output1 .= ' <tr>

                            <td class="border px-4 py-2">'. $fieldequip->Calibration_point .'</td>
                            <td class="border px-4 py-2" >'.$fieldequip->Expired_Date .'</td>
                            <td class="border px-4 py-2">'. $fieldequip->Calibration_Date.'</td>
                            <td class="border px-4 py-2 max-w-lg">'. $fieldequip->Next_Due_Date .'</td>
                            <td class="border px-4 py-2">'.$fieldequip->Correction_factor .'</td>
                            <td class="border px-4 py-2">

                                    <div class="flex flex-col-reverse">
                                        <dt class="text-sm font-medium text-slate-600">'. $fieldequip->Validated_by .'</dt>
                                        <dd class="text-xs text-slate-500">Validated by</dd>
                                    </div>
                                    <br>
                                    <div class="flex flex-col-reverse">
                                        <dt class="text-sm font-medium text-slate-600">'. $fieldequip->Validated_by .'</dt>
                                        <dd class="text-xs text-slate-500">Validated Date</dd>
                                    </div>


                            </td>




                            <td class="border py-2 p-4">
                                <div class="p-2">
                                    <button wire:click="edit('. $fieldequip->id .')" class="bg-blue-500 hover:bg-blue-700 text-xs text-white font-bold py-2 px-3 rounded">Edit</button>

                                    <button wire:click="delete('. $fieldequip->id .')" class="bg-red-500 hover:bg-red-700 text-xs text-white font-bold py-2 px-4 rounded">Delete</button>
                                    <div>';

            $matchThese = ['id'=>$fieldequip->id];

            $output1 .=' <form action="'.route('file.keep2',$matchThese).'" method="POST" enctype="multipart/form-data">

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
}

