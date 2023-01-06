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
        <th class="px-4 py-2">Chemical Check List</th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>

        <th class="px-4 py-2"></th>
    </tr>

    <tr class="bg-gray-100">
        <th class="px-4 py-2">No</th>
        <th class="px-4 py-2 w-100" width="33">Chemical Name</th>
        <th class="px-4 py-2 w-30" width="28">Concentration</th>
        <th class="px-2 py-2" width="15">Lot No</th>
        <th class="px-2 py-2" width="18">Product_No</th>
        <th class="px-2 py-2" width="40">CAS_No</th>
        <th class="px-2 py-2" width="18">Formula</th>
        <th class="px-2 py-2" width="30">Brand</th>
        <th class="px-4 py-2" width="14">Packing_size</th>
        <th class="px-4 py-2" width="14">Quantity</th>
        <th class="px-4 py-2" width="14">Received_Date</th>
        <th class="px-4 py-2" width="14">Expired_Date</th>
        <th class="px-4 py-2" width="14">Location</th>
        <th class="px-4 py-2" width="14">Bottle_ID</th>
    </tr>
    </thead>
    <tbody id="content">
    @foreach($data as $fieldequip)
        <tr>
            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border px-4 py-2">{{ $fieldequip->Chemical_Name }}</td>

            <td class="border px-4 py-2">{{ $fieldequip->Concentration }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Lot_No}}</td>
            <td class="border px-4 py-2">{{ $fieldequip->Product_No }}</td>
            <td class="border px-4 py-2">{{$fieldequip->CAS_No}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Formula}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Brand}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Packing_size}}</td>
            <td class="border px-4 py-2">{{ $fieldequip->Quantity }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Received_Date}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Expired_Date}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Location}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Bottle_ID}}</td>





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
