<div>
<x-slot name="header">
    <div class="flex justify-between">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            Register Chemical Reagent

    </h2>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

       <div class="mb-3 xl:w-96">
            <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                <input type="search" class="form-control relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search" id="search" onfocus="this.value=''">
                <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
        </svg>
      </span>
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </div>

</x-slot>
<div class="py-12">

    <div class="max-w-max mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
                @if($errors->any())
                        <?php $count = 0; ?>
                    @foreach ($errors->all() as $error)
                        @if($count < 20)
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                            <div class="flex">
                                <div>
                                        <p class="text-sm">{{ $error }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                            <?php $count++; ?>
                    @endforeach
                @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Register New Equipments</button>
            @if($isOpen)
                @include('livewire.createchem')
            @endif
                <button wire:click="createimp()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded my-3">Import Excel File</button>
                @if($isimpOpen)
                    @include('livewire.cretechemimp')
                @endif
                <button wire:click="createexp()" class="bg-fuchsia-600 hover:bg-fuchsia-800 text-white font-bold py-2 px-4 rounded my-3">Export Master List</button>
                @if($isexpOpen)
                    @include('livewire.creteequip')
                @endif
                @if($ismxpOpen)
                    @include('livewire.choosmn', ['zzzz' =>$idzz])
                @endif
                <button wire:click="toexport()" class="bg-purple-600 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded my-3">Export all data</button>

                <table class="table-auto w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Chemical Name</th>
                    <th class="px-4 py-2 w-30">Lot No.</th>
                    <th class="px-4 py-2">Formula</th>
                    <th class="px-4 py-2">Brand</th>
                    <th class="px-4 py-2">Packing Size</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Location</th>
                    <th class="px-6 py-2">Action</th>
                </tr>
                </thead>
                <tbody id="content20">
                @foreach($data as $fieldequip)
                    <tr>
                        <td class="border px-4 py-2">{{ $fieldequip->Chemical_Name }}</td>

                        <td class="border px-4 py-2" >{{ $fieldequip->Lot_No }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Formula }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Brand }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Packing_size }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Quantity }}</td>
                        <td class="border px-4 py-2">{{ $fieldequip->Location }}</td>
                        <td class="border px-6 py-2 p-4">
                            <div class="p-2">
                            <button wire:click="edit('{{ $fieldequip->id }}')" class="bg-blue-500 hover:bg-blue-700 text-xs text-white font-bold py-2 px-3 rounded">Edit</button>
                                <button wire:click="delete('{{ $fieldequip->id }}')" class="bg-red-500 hover:bg-red-700 text-xs text-white font-bold py-2 px-4 rounded">Delete</button>

                            </div>






                        </td>
                    </tr>
                @endforeach


                <span>{!! $data->render() !!}</span>
                </tbody>


            </table>

        </div>
        <script type = "text/javascript">

            $('#search').on('keyup',function(){
                $value=$(this).val();

                $.ajax({
                    type : 'get',
                    url : '{{URL::to('search9')}}',
                    data:{'search9':$value},
                    success:function(data){
                        console.log(data);
                        $('#content20').html(data);
                    }
                });


            })
        </script>
    </div>
</div>

</div>
