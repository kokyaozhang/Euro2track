<table class="table-auto w-full">
    <thead>
    <tr class="bg-gray-100">
        <th class="px-4 py-2">LOD CHEMICAL LAB</th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>

        <th class="px-4 py-2">EUROFINS NM LABORATORY SDN. BHD.</th>
    </tr>
    <tr class="bg-gray-100">
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2">EXTERNAL CALIBRATION AND PREVENTIVE MAINTENANCE SCHEDULE</th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>

        <th class="px-4 py-2"></th>
    </tr>

    <tr class="bg-gray-100">
        <th class="px-4 py-2">No</th>
        <th class="px-4 py-2 w-100" width="25">Equipment</th>
        <th class="px-2 py-2" width="15">Premise/Zone</th>
        <th class="px-2 py-2" width="18">Calibration Point</th>
        <th class="px-2 py-2" width="21">Identification Number</th>
        <th class="px-2 py-2" width="11">Interval</th>
        <th class="px-2 py-2">Jan</th>
        <th class="px-2 py-2">Feb</th>
        <th class="px-2 py-2">Mar</th>
        <th class="px-2 py-2">Apr</th>
        <th class="px-2 py-2">May</th>
        <th class="px-2 py-2">Jun</th>
        <th class="px-2 py-2">Jul</th>
        <th class="px-2 py-2">Aug</th>
        <th class="px-2 py-2">Sep</th>
        <th class="px-2 py-2">Oct</th>
        <th class="px-2 py-2">Nov</th>
        <th class="px-2 py-2">Dec</th>
        <th class="px-4 py-2" width="20">Expired at</th>
        <th class="px-4 py-2" width="20">Date Performed</th>
        <th class="px-4 py-2" width="20">Next Due Date</th>
        <th class="px-4 py-2" width="20">Correction factor</th>
        <th class="px-4 py-2" width="20">Validated by</th>
        <th class="px-4 py-2" width="20">Validated date</th>
    </tr>
    </thead>
    <tbody id="content">
    @foreach($data as $fieldequip)
        <tr>
            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border px-4 py-2">{{ $fieldequip->Equipment_Name }}</td>
            <td class="border px-4 py-2">{{ $fieldequip->Location }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Calibration_point}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Identification_No}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Calib_date}}</td>
            <td class="border px-4 py-2">
                <ul class="list-disc">
                    @if(date('F', strtotime($fieldequip->Expired_Date))== 'January')
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif

                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'February')
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif

                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'March')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif


                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
                    <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'April')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif


                <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'May')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'June')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'July')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'August')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>

            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'September')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'October')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'November')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
                <td class="border px-4 py-2" ></td>

            @elseif(date('F', strtotime($fieldequip->Expired_Date))== 'December')
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                <td class="border px-4 py-2" ></td>
                @if($fieldequip->Preventive == 1&&$fieldequip->External == 1)
                <td class="border px-4 py-2" >PM/EC</td>
                @elseif($fieldequip->Preventive == 1)
                <td class="border px-4 py-2" >PM</td>
                @elseif($fieldequip->External == 1)
                <td class="border px-4 py-2" >EC</td>
                @else
                    <td class="border px-4 py-2" ></td>
                @endif
            @endif


            <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date) )}}</td>
            <td class="border px-4 py-2" >{{$fieldequip->Calibration_Date}}</td>
            @if($fieldequip->Calib_date == 'Daily')
                <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date . " +1 month") )}}</td>
            @elseif($fieldequip->Calib_date == 'Weekly')
                <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date . " +1 week") )}}</td>
            @elseif($fieldequip->Calib_date == 'Monthly')
                <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date . " +1 month") )}}</td>
            @elseif($fieldequip->Calib_date == 'Quarterly')
                <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date . " +3 month") )}}</td>
            @elseif($fieldequip->Calib_date == 'Half Yearly')
                <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date . " +6 month") )}}</td>
            @elseif($fieldequip->Calib_date == 'Yearly')
                <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date . " +1 year") )}}</td>
            @elseif($fieldequip->Calib_date == 'Biennial')
                <td class="border px-4 py-2" >{{date('d F Y', strtotime($fieldequip->Expired_Date . " +2 year") )}}</td>
            @else
                <td class="border px-4 py-2" ></td>

            @endif
            <td class="border px-4 py-2" >{{$fieldequip->Correction_factor}}</td>
            <td class="border px-4 py-2" >{{$fieldequip->Validated_by}}</td>
            <td class="border px-4 py-2" >{{$fieldequip->Validated_Date}}</td>

        </tr>
    @endforeach



    </tbody>
    <tfoot>
    <tr>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >EC = External Calibration/certification</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >HY = Half yearly</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >Y = yearly</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >B = Biennial</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >PM = Preventive Maintenance</td>
        <td class="border px-4 py-2" ></td>
    </tr>
    <tr></tr>
    <tr> <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >Prepared by : {{ Auth::user()->name }}</td>
        <td class="border px-4 py-2" >Date : {{date('d-m-Y')}}</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >Reviewed By(LOD/TDD): {{ Auth::user()->name }}</td>
        <td class="border px-4 py-2" >Date : {{date('d-m-Y')}}</td>
    </tr>
    </tfoot>

</table>
