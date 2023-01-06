<?php

namespace App\Exports;

use App\Models\Fieldequip;
use App\Models\Chemical;
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

class chemicalselExport implements FromView,WithEvents
{

    //style the excel
    public function registerEvents(): array
    {
        // TODO: Implement registerEvents() method.

        $styleArray = [
            'font' => array(
                'name'      =>  'Arial',
                'size'      => 11,

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

    public function __construct($id,$year,$pr)
    {
        $this->id = $id;
        $this->year = $year;
        $this->pr = $pr;
    }

    public function view(): View
    {
        if( $this->id  == 1){
            $matchThese = ['State' => '1'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Chemical::where($matchThese)->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Chemical_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Chemical::where($matchThese)->whereYear('created_at', $this->year)->orderBy('Chemical_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Chemical::where($matchThese)->where('Location',$this->pr)->orderBy('Chemical_Name')->get();
            }
            else{
                $fieldequips = Chemical::where($matchThese)->orderBy('Chemical_Name')->get();
            }
        }
        else{
            $matchThese = ['State' => '2'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Chemical::where($matchThese)->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Chemical_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Chemical::where($matchThese)->whereYear('created_at', $this->year)->orderBy('Chemical_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Chemical::where($matchThese)->where('Location',$this->pr)->orderBy('Chemical_Name')->get();
            }
            else{
                $fieldequips = Chemical::where($matchThese)->orderBy('Chemical_Name')->get();
            }
        }

        $matchThese = ['type' => '1'];
        $vendor = Vendor::pluck('vendor_name');
        //import data equal to the type
//segment
        $segment =  'segment';




        return view('livewire.chemfieldexp',['data' => $fieldequips],['vendor' => $vendor]);
    }


}
