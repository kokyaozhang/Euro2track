<div>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            Manage Vendors

        </h2>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <div class="mb-3 xl:w-96">
            <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                <input type="search" class="form-control relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="search" aria-label="search" aria-describedby="button-addon2" name="search" id="search" onfocus="this.value=''">
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

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
                <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Register New Vendors</button>
                @if($isOpen)
                    @include('livewire.createeditvendor')
                @endif
            @if($errors->any())
                    <?php $count = 0; ?>
                @foreach ($errors->all() as $error)
                    @if($count < 5)
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


            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full text-md  bg-white shadow-md rounded">
                    <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Name</th>

                        <th class="text-left p-3 px-5 ">Email</th>
                        <th class="text-left p-3 px-5 ">Premise</th>
                        <th class="text-left p-3 px-5">Team</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="content1">
                    @foreach($data as $row)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100 flex-auto">
                         {{--run function once per user id--}}
                            <td class="p-3 px-5"><input type="text"  value="{{$row->vendor_name}}" class="bg-transparent" readonly></td>
                            {{--<td class="p-1 px-5" >
                                @php ($mow =  $row->vendor_contact)
                                @foreach(explode(',',$mow) as $tow)
                                <input type="text"  value="{{$tow}}" class="bg-transparent" readonly>
                                    @endforeach
                            </td>--}}

                        <td class="p-3 px-5" >
                            @php ($fmow =  $row->vendor_email)
                            @foreach(explode(',',$fmow) as $trow)
                                <input type="text"  value="{{$trow}}" class="bg-transparent" readonly>
                            @endforeach
                        </td>
                        <td class="p-3 px-5" ><input type="text"  value="{{$row->vendor_category}}" class="bg-transparent" readonly></td>
                            <td class="p-3 px-5" ><input type="text"  value="{{$row->vendor_role}}" class="bg-transparent" readonly></td>


                            <td class="p-3 px-5 flex">

                                <button type="button" wire:click="edit({{ $row->id }})" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                                <button type="button" wire:click="delete({{ $row->id }})" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>

                            </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
                <script type = "text/javascript">

                    $('#search').on('keyup',function(){
                        $value=$(this).val();

                        $.ajax({
                            type : 'get',
                            url : '{{URL::to('search1')}}',
                            data:{'search1':$value},

                            success:function(data){
                                console.log(data);
                                $('#content1').html(data);
                            }

                        });


                    })
                </script>
        </div>
    </div>
</div>

