<?php

namespace App\Http\Livewire;

use App\Exports\testExport;
use App\Models\Fieldequip;
use App\Models\Vendor;
use http\Client\Response;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\Service;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Session\Session;
use Livewire\WithFileUploads;

use Illuminate\Http\Request;

class GeneralServices extends Component
{
    public $fieldequips, $Identification_No,
$Date_Performed,
$Category,
$Type,
$Nature_of_Problem,
$Validated_by,
$Validated_Date,$calibration_id,$Correction_factor,$calibration,$Year,$Pr,$Next_Due_Date,$bo_date;

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

        $data = Service::where('Identification_No',  $session->get('idno'))->paginate(5);
        $dent = Fieldequip::get()->where('Identification_No',  $session->get('idno'));
        return view('livewire.generalservices',['data' => $data],['dent' => $dent]);
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
            'State' => 'Service',]);


        $this->closeimpModal();
        return redirect()->route('sendEmail5');
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
            'State' => 'Service',]);


        $this->closeimpModal();
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
        return redirect()->route('sendEmail6');
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
        $calibration= Service::findOrFail($id);
        $this->calibration_id = $id;
        $this->Identification_No = $calibration->Identification_No;
        $this->Date_Performed = $calibration->Date_Performed;
        $this->Next_Due_Date = $calibration->Next_Due_Date;
        $this->Category = $calibration->Category;
        $this->Type = $calibration->Type;
        $this->Nature_of_Problem = $calibration->Nature_of_Problem;
        $this->Correction_factor = $calibration->Correction_factor;
        $this->Validated_by = $calibration->Validated_by;
        $this->Validated_Date = $calibration->Validated_Date;




        $this->openModal();

    }
    public function store(Request $request)
    {
        $this->validate([


            'Date_Performed' => 'required',

        ]);
        $session = new Session();
        $fieldequip = Fieldequip::where('Identification_No', $session->get('idno'))->first();
        //get fieldequip int_Date
        $int_Date = $fieldequip->Int_date;

////if int_date is yearly, Date_Performed from data is 1 year from now
/// if int_date is monthly, Date_Performed from data is 1 month from now
/// if int_date is quarterly, Date_Performed from data is 3 months from now
/// if int_date is biennial, Date_Performed from data is 2 years from now
/// if int_date is daily, Date_Performed from data is 1 day from now
/// if int_date is weekly, Date_Performed from data is 1 week from now
/// if int_date is half yearly, Date_Performed from data is 6 months from now
        if ($int_Date == 'Yearly') {
            $this->Next_Due_Date = date('Y-m-d', strtotime('+1 year', strtotime($this->Date_Performed)));
        } elseif ($int_Date == 'Monthly') {
            $this->Next_Due_Date = date('Y-m-d', strtotime('+1 month', strtotime($this->Date_Performed)));
        } elseif ($int_Date == 'Quarterly') {
            $this->Next_Due_Date = date('Y-m-d', strtotime('+3 months', strtotime($this->Date_Performed)));
        } elseif ($int_Date == 'Biennial') {
            $this->Next_Due_Date = date('Y-m-d', strtotime('+2 years', strtotime($this->Date_Performed)));
        } elseif ($int_Date == 'Daily') {
            $this->Next_Due_Date = date('Y-m-d', strtotime('+1 day', strtotime($this->Date_Performed)));
        } elseif ($int_Date == 'Weekly') {
            $this->Next_Due_Date = date('Y-m-d', strtotime('+1 week', strtotime($this->Date_Performed)));
        } elseif ($int_Date == 'Half Yearly') {
            $this->Next_Due_Date = date('Y-m-d', strtotime('+6 months', strtotime($this->Date_Performed)));
        }else{
            //toast message error

           //redirect to fieleequips with idno session data




            return redirect()->route('fieldequips')->with('message', 'Service frequency "'.$session->get('idno') .'" not set, please set service frequency in the equipments page under "Operation"');

        }




        Service::updateOrCreate(['id' => $this->calibration_id], [
            'Identification_No' => $session->get('idno'),
            'Date_Performed' => $this->Date_Performed,
            'Next_Due_Date' => $this->Next_Due_Date,
            'Category' => $this->Category,
            'Type' => $this->Type,
            'Nature_of_Problem' => $this->Nature_of_Problem,
            'Correction_factor' => $this->Correction_factor,
            //validated by is current user name
            'Validated_by' => auth()->user()->name,
            //validated date is current date
            'Validated_Date' => date('Y-m-d'),



        ]);




        session()->flash('message',
            $this->calibration_id ? 'Services Updated Successfully.' : 'Services Created Successfully.');

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
        $this->Date_Performed = '';
        $this->Category = '';
        $this->Type = '';
        $this->Nature_of_Problem = '';
        $this->Correction_factor = '';
        $this->Validated_by = '';
        $this->Validated_Date = '';

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
        Service::findOrFail($id)->delete();
        session()->flash('message', 'Services Record Deleted Successfully.');
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
    public function dxport(Request $request)
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
        return Excel::download(new testExport($lastChar,$Yr,$Pr), 'Services.xlsx');


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

        $array =$request->search8;
        $data =  $data = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')
            ->where(function($query) use ($array,$zzz){
                $query->where('services.Identification_No', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })->orWhere(function($query)use ($array,$zzz){
                $query->where('fieldequips.Equipment_Name', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })
            ->orWhere(function($query)use ($array,$zzz){
                $query->where('services.Date_Performed', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })->orWhere(function($query)use ($array,$zzz){
                $query->where('services.Nature_of_Problem', 'like', '%' . $array . '%')
                    ->where('fieldequips.Identification_No',  $zzz);
            })
            ->paginate(5);




        Log::critical($data);



        foreach($data as $fieldequip){


            $output1 .= ' <tr>

                            <td class="border px-4 py-2">'. $fieldequip->Date_Performed .'</td>
                            <td class="border px-4 py-2" >'.$fieldequip->Category .'</td>
                            <td class="border px-4 py-2">'. $fieldequip->Type.'</td>
                            <td class="border px-4 py-2 max-w-lg">'. $fieldequip->Nature_of_Problem .'</td>
                            <td class="border px-4 py-2">'.$fieldequip->Correction_factor .'</td>
                            <td class="border px-4 py-2">

                                    <div class="flex flex-col-reverse">
                                        <dt class="text-sm font-medium text-slate-600">'. $fieldequip->Validated_by .'</dt>
                                        <dd class="text-xs text-slate-500">Validated by</dd>
                                    </div>
                                    <br>
                                    <div class="flex flex-col-reverse">
                                        <dt class="text-sm font-medium text-slate-600">'. $fieldequip->created_at .'</dt>
                                        <dd class="text-xs text-slate-500">Validated Date</dd>
                                    </div>


                            </td>




                            <td class="border py-2 p-4">
                                <div class="p-2">
                                    <button wire:click="edit('. $fieldequip->id .')" class="bg-blue-500 hover:bg-blue-700 text-xs text-white font-bold py-2 px-3 rounded">Edit</button>

                                    <button wire:click="delete('. $fieldequip->id .')" class="bg-red-500 hover:bg-red-700 text-xs text-white font-bold py-2 px-4 rounded">Delete</button>
                                    <div>';

            $matchThese = ['id'=>$fieldequip->id];

            $output1 .='

                                    </div>
                                </div>

                            </td>
                        </tr>';




        }


        return response($output1);
    }
}

