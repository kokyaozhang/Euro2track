<?php

namespace App\Exports;

use App\Models\Breakdown;
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

class BreakdownExport implements FromView,WithEvents
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

    protected $id,$IDn,$Yr;


    public function __construct($id,$IDn,$Yr)
    {
        $this->id = $id;
        $this->IDn = $IDn;
        $this->Yr = $Yr;
    }

    public function view(): View
    {
        if( $this->id  == 1){
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
                elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '1'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 2){
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '2'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }

        }
        elseif( $this->id  == 3){
    if($this->IDn !=""&&$this->Yr!="") {
                    $matchThese = ['fieldequips.type' => '3'];
                    $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
                }
                elseif($this->IDn!=""&&$this->Yr==""){
                    $matchThese = ['fieldequips.type' => '3'];
                    $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
                }
                elseif($this->IDn==""&&$this->Yr!=""){
                    $matchThese = ['fieldequips.type' => '3'];
                    $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
                }
                else{
                    $matchThese = ['fieldequips.type' => '3'];
                    $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
                }
        }
        elseif( $this->id  == 4){
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '4'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 5){
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '5'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '5'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '5'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '5'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 6){
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '6'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 7){
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '7'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        elseif( $this->id  == 8){
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '8'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '8'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '8'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '8'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }
        else{
            if($this->IDn !=""&&$this->Yr!="") {
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn!=""&&$this->Yr==""){
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->where('Identification_No', $this->IDn)->orderBy('Equipment_Name')->get();
            }
            elseif($this->IDn==""&&$this->Yr!=""){
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->whereYear('created_at', $this->Yr)->orderBy('Equipment_Name')->get();
            }
            else{
                $matchThese = ['fieldequips.type' => '9'];
                $fieldequips = Breakdown::join('fieldequips', 'fieldequips.Identification_No', '=', 'breakdowns.Identification_No')->where($matchThese)->orderBy('Equipment_Name')->get();
            }
        }

        $matchThese = ['fieldequips.type'  => '1'];
        $vendor = Vendor::pluck('vendor_name');
        //import data equal to the type
        //segment
        $segment =  'segment';




        return view('livewire.expbdfield',['data' => $fieldequips],['vendor' => $vendor]);
    }


}
