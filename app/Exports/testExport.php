<?php

namespace App\Exports;

use App\Models\Breakdown;
use App\Models\Fieldequip;
use App\Models\Service;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Facades\Excel;

class testExport implements FromView,WithEvents
{

    //style the excel
public function registerEvents(): array
{
    // TODO: Implement registerEvents() method.

    $styleArray = [
        'font' => array(
            'name'      =>  'Arial',
            'size'      =>  12,

        ),
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        ],
    ];
    return [
        // Handle by a closure.
        AfterSheet::class => function(AfterSheet $event) use ($styleArray) {
            $event->sheet->getDelegate()->getStyle('A1:Z1000')->applyFromArray($styleArray);
        },
    ];
}

    protected $id;

    public function __construct($id,$Yr,$Pr)
    {
        $this->id = $id;
        $this->Yr = $Yr;
        $this->Pr = $Pr;

    }
    public function view(): View
    {
        if( $this->id  == 1){
            $matchThese = ['fieldequips.type' => '1'];
            if($this->Pr !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr !=""&&$this->Yr=="") {
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr ==""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }


        }
        elseif( $this->id  == 2){
            $matchThese = ['type' => '2'];
            if($this->Pr !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr !=""&&$this->Yr=="") {
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr ==""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }

        }
        elseif( $this->id  == 3){
            $matchThese = ['type' => '3'];
            if($this->Pr !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '3'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr !=""&&$this->Yr=="") {
                $matchThese = ['fieldequips.type' => '3'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr ==""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '3'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '3'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }

        }
        elseif( $this->id  == 4){
            $matchThese = ['type' => '4'];
            if($this->Pr !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr !=""&&$this->Yr=="") {
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr ==""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 5){
            $matchThese = ['type' => '5'];
               if($this->Pr !=""&&$this->Yr!="") {
                    $matchThese = ['fieldequips.type' => '5'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
                }
                else if($this->Pr !=""&&$this->Yr=="") {
                    $matchThese = ['fieldequips.type' => '5'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
                }
                else if($this->Pr ==""&&$this->Yr!="") {
                    $matchThese = ['fieldequips.type' => '5'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
                }
                else{
                    $matchThese = ['fieldequips.type' => '5'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
                }
        }
        elseif( $this->id  == 6){
            $matchThese = ['type' => '6'];
            if($this->Pr !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr !=""&&$this->Yr=="") {
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr ==""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 7){
            $matchThese = ['type' => '7'];
            if($this->Pr !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr !=""&&$this->Yr=="") {
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr ==""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 8){
            $matchThese = ['type' => '8'];
               if($this->Pr !=""&&$this->Yr!="") {
                    $matchThese = ['fieldequips.type' => '8'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
                }
                else if($this->Pr !=""&&$this->Yr=="") {
                    $matchThese = ['fieldequips.type' => '8'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
                }
                else if($this->Pr ==""&&$this->Yr!="") {
                    $matchThese = ['fieldequips.type' => '8'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
                }
                else{
                    $matchThese = ['fieldequips.type' => '8'];
                    $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
                }
        }
        else{
            $matchThese = ['type' => '9'];
            if($this->Pr !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr !=""&&$this->Yr=="") {
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->where('Identification_No', $this->Pr)->orderBy('Equipment_Name')->get();
            }
            else if($this->Pr ==""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->whereYear('Date_Performed', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Service::join('fieldequips', 'fieldequips.Identification_No', '=', 'services.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }

        $matchThese = ['type' => '1'];
        $vendor = Vendor::pluck('vendor_name');
        //import data equal to the type
//segment
        $segment =  'segment';




        return view('livewire.expfield',['data' => $fieldequips],['vendor' => $vendor]);
    }


}
