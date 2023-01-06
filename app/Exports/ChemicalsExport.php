<?php

namespace App\Exports;

use App\Models\Chemical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ChemicalsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {


        $previous = url()->previous();
        Log::info($previous);
        $lastChar = substr($previous, -1);
        switch ($lastChar){
            case 1:
                $matchThese = ['State' => '1'];
                return Chemical::where($matchThese)->get();


            case 2:
                $matchThese = ['State' => '2'];
                return Chemical::where($matchThese)->get();


            default:

                return Chemical::all();
        }

    }
    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
