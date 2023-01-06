<table class="table-auto w-full">
    <thead>
    <tr class="bg-gray-100">
        <th class="px-4 py-2">LOD CHEMICAL LAB</th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2">EUROFINS NM LABORATORY SDN. BHD.</th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
    </tr>
    <tr class="bg-gray-100">
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2">Testing and Measurement Instrument Active List</th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>

        <th class="px-4 py-2"></th>
    </tr>

    <tr class="bg-gray-100">
        <th class="px-4 py-2">No</th>
        <th class="px-4 py-2 w-100" width="33">Testing and Measurement
            Instrument</th>
        <th class="px-4 py-2 w-30" width="28">Brand/Model/Series No</th>
        <th class="px-2 py-2" width="15">ID No</th>
        <th class="px-2 py-2" width="18">Zone</th>
        <th class="px-2 py-2" width="40">Software</th>
        <th class="px-2 py-2" width="18">Capacity</th>
        <th class="px-2 py-2" width="30">Remark</th>
        <th class="px-4 py-2" width="14">Quantity</th>
    </tr>
    </thead>
    <tbody id="content">
    @foreach($data as $fieldequip)
        <tr>
            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border px-4 py-2">{{ $fieldequip->Equipment_Name }}</td>

            <td class="border px-4 py-2">{{ $fieldequip->classification }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Identification_No}}</td>
            <td class="border px-4 py-2">{{ $fieldequip->Location }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Technical_Info}}</td>
            <td class="border px-4 py-2">{{$fieldequip->equip_limit}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Comment}}</td>



        {{--quantity +1 if current equipment name same as the previous equipment name--}}
        @if($loop->iteration > 1 && $fieldequip->Equipment_Name == $data[$loop->index - 1]->Equipment_Name)
            @php($quantity++)
        @else
            @php($quantity = 1)
        @endif
        {{--if current equipment name same as the next equipment name, skip--}}
        @if($loop->iteration < $data->count() && $fieldequip->Equipment_Name == $data[$loop->index + 1]->Equipment_Name)
            @continue
        @endif
        <td class="border px-4 py-2" >{{ $quantity }}</td>

    @endforeach

    </tbody>
    <tfoot>

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

    </tr>
    <tr> <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >Reviewed By(LOD/TDD): {{ Auth::user()->name }}</td>
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

    </tr>
    </tfoot>

</table>
