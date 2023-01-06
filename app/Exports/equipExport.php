<?php

namespace App\Exports;

use App\Models\Fieldequip;
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

class equipExport implements FromView,WithEvents
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
            $matchThese = ['type' => '1'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 2){
            $matchThese = ['type' => '2'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 3){
            $matchThese = ['type' => '3'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 4){
            $matchThese = ['type' => '4'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 5){
            $matchThese = ['type' => '5'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 6){
            $matchThese = ['type' => '6'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 7){
            $matchThese = ['type' => '7'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 8){
            $matchThese = ['type' => '8'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }
        else{
            $matchThese = ['type' => '9'];
            $year = $this->year;
            if($this->year !=""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }else if($this->year !=""&&$this->pr==""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->whereYear('created_at', $this->year)->orderBy('Equipment_Name')->get();
            }
            else if($this->year ==""&&$this->pr!=""){
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->where('Location',$this->pr)->orderBy('Equipment_Name')->get();
            }
            else{
                $fieldequips = Fieldequip::where($matchThese)->where('Status','Active')->orderBy('Equipment_Name')->get();
            }
        }

        $matchThese = ['type' => '1'];
        $vendor = Vendor::pluck('vendor_name');
        //import data equal to the type
//segment
        $segment =  'segment';




        return view('livewire.equipfield',['data' => $fieldequips],['vendor' => $vendor]);
    }


}
