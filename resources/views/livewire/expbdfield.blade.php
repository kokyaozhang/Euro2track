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
        <th class="px-4 py-2">EQUIPMENT BREAKDOWNS RECORDS</th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
        <th class="px-4 py-2"></th>
    </tr>

    <tr class="bg-gray-100">
        <th class="px-4 py-2">No</th>
        <th class="px-4 py-2 w-100" width="30">Equipment Name</th>
        <th class="px-4 py-2 w-30" width="25">Breakdown Date</th>
        <th class="px-2 py-2" width="22">Problem</th>
        <th class="px-2 py-2" width="18">Breakdown parts</th>
        <th class="px-2 py-2" width="21">Description</th>
        <th class="px-2 py-2" width="20">Completion date</th>
        <th class="px-4 py-2" width="20">Action by</th>
        <th class="px-4 py-2" width="20">Reviewed by</th>
        <th class="px-4 py-2" width="40">Remarks</th>
    </tr>
    </thead>
    <tbody id="content">
    @foreach($data as $fieldequip)
        <tr>
            <td class="border px-4 py-2">{{$loop->iteration }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Equipment_Name}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Breakdown_date}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Breakdown_problem }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Breakdown_parts }}</td>
            <td class="border px-4 py-2">{{$fieldequip->Description}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Complete_date}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Action_by}}</td>
            <td class="border px-4 py-2">{{$fieldequip->Reviewed_by}}</td>
            <td class="border px-4 py-2" >{{$fieldequip->Remarks}}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>

    </tr>
    <tr></tr>
    <tr> <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >Prepared by : {{ Auth::user()->name }}</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >Reviewed By(LOD/TDD): {{ Auth::user()->name }}</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>

    </tr>
    <tr> <td class="border px-4 py-2" ></td>

        <td class="border px-4 py-2" >Date : {{date('d-m-Y')}}</td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" ></td>
        <td class="border px-4 py-2" >Date : {{date('d-m-Y')}}</td>
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
