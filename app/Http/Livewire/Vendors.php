<?php

namespace App\Http\Livewire;

use App\Exports\FieldequipsExport;
use App\Imports\FieldequipImport;
use App\Imports\FieldequipsImport;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Laravel\Jetstream\Jetstream;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use App\Models\Teamuser;
use App\Models\Vendor;

use Laravel\Jetstream\HasTeams;



class Vendors extends Component
{
    public $vendor_id,$vendor_name, $vendor_contact,$vendor_category, $vendor_email, $vendor_role,$vendor,$remarks,$Calibration,$Premain,$OOrder,$Repair,$Maturity;

    public $tu_id, $team_id, $user_id,$role,$username,$email;
    public $currentPage;
    public $isOpen = 0;
    public $isexpOpen = 0;
    public $isimpOpen = 0;
    public $Identification_No;
    public $segment,$slander;



    /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */
    public function render(Request $request)
    {
//get team id
        $data = Vendor::all();

        $slander[]=1;
        return view('livewire.vendors',compact('data'));
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
    public function closeexpModal()
    {
        $this->isexpOpen = false;
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

        $this->vendor_id = '';
        $this->vendor_name = '';
        $this->vendor_contact = '';
        $this->vendor_email = '';
        $this->vendor_category = '';
        $this->vendor_role = '';
        $this->remarks = '';
        $this->Calibration = '';
        $this->Premain = '';
        $this->OOrder = '';
        $this->Repair = '';
        $this->Maturity = '';

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
        return Excel::download(new FieldequipsExport, 'users.xlsx');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'vendor_name' => 'required',
            'vendor_role' => 'required',
        ]);


        Vendor::updateOrCreate(['id' => $this->vendor_id], [
            'vendor_name' => $this->vendor_name,
            'vendor_contact' => $this->vendor_contact,
            'vendor_email' => $this->vendor_email,
            'vendor_role' => $this->vendor_role,
            'vendor_category' => $this->vendor_category,
            'remarks' => $this->remarks,
            'Calibration' => $this->Calibration,
            'Premain' => $this->Premain,
            'OOrder' => $this->OOrder,
            'Repair' => $this->Repair,
            'Maturity' => $this->Maturity,
        ]);



        session()->flash('message',
            $this->vendor_id ? 'Vendor Updated Successfully.' : 'Vendor Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);
        $this->vendor_id = $id;
        $this->vendor_name = $vendor->vendor_name;
        $this->vendor_contact = $vendor->vendor_contact;
        $this->vendor_email = $vendor->vendor_email;
        $this->vendor_role = $vendor->vendor_role;
        $this->vendor_category = $vendor->vendor_category;
        $this->remarks = $vendor->remarks;
        $this->Calibration = $vendor->Calibration;
        $this->Premain = $vendor->Premain;
        $this->OOrder = $vendor->OOrder;
        $this->Repair = $vendor->Repair;
        $this->Maturity = $vendor->Maturity;

        $this->openModal();

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        public function delete($id)
    {
        Vendor::find($id)->delete();
        session()->flash('message', 'Vendor Deleted Successfully.');

    }
    public function download(){
        $path=public_path('excel/excelformatprinted.xlsx');
        return response()->download($path);
    }


    public function search(Request $request)
    {

        $output1="";

        $data = Vendor::where('vendor_name', 'like', '%'.$request->search1.'%')
            ->orWhere('vendor_contact', 'like', '%'.$request->search1.'%')
            ->orWhere('vendor_email', 'like', '%'.$request->search1.'%')
            ->orWhere('vendor_role', 'like', '%'.$request->search1.'%')
            ->orWhere('remarks', 'like', '%'.$request->search1.'%')
            ->paginate(5);




        foreach($data as $row) {


            $output1 .= '<tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="p-3 px-5"><input type="text"  value="'.$row->vendor_name.'" class="bg-transparent" readonly></td>
                            <td class="p-3 px-5" >';
            $mow =  $row->vendor_contact;
            $tags = explode(',',$mow);
            $now = $row->vendor_email;
            $tags2 = explode(',',$now);
            foreach($tags as $trow){
                $output1 .= '<input type="text"  value="'.$trow.'" class="bg-transparent" readonly>';
            }
            $output1 .= '</td>
                            <td class="p-3 px-5">';
            foreach($tags2 as $tnow){
                $output1 .= '  <input type="text"  value="'.$tnow.'" class="bg-transparent" readonly>';
            }

            $output1 .= '</td>
                            <td class="p-3 px-5" ><input type="text"  value="'.$row->vendor_role.'" class="bg-transparent" readonly></td>


                            <td class="p-3 px-5 flex">

                                <button type="button" wire:click="edit('. $row->id .')" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                                <button type="button" wire:click="delete('. $row->id .')" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>

                            </td>


                    </tr>           ';

        }


        return response($output1);
    }





}





