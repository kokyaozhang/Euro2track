<div>

<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            @if($errors->any())
                <h5 style="color:red">Following errors exists in your excel file</h5>
                <ol>
                    @foreach ($errors->all() as $error)

                        <li>{{$error}}</li>
                    @endforeach
                </ol>
            @endif
            <form action="/idd" method = "POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <p class="text-sm font-light leading-relaxed mt-0 mb-0 text-gray-800 pl-10">
                            Please enter the desired details to filter out excel content. (Leave it blank to get every active result in current year)
                        </p>





                        <div class="flex justify-center">

                            <div class="mb-3 w-96">

                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput6" placeholder="Enter Year:" wire:model="Year">




                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput6" placeholder="Enter Premise:" wire:model="Pr">

                            </div>
                        </div>
                    </div>
                </div>

            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
<span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

          <button wire:click.prevent="mxport()" class="btn btn-info form-control inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Export
          </button>
        </span>



        </div>
                <span class="mt-3 flex justify-end w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

          <button wire:click="closeexpModal()" type="button" class="w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
                </form>
    </div>
</div>
</div>

</div>
