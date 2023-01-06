<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Vendor name:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter vendor name" wire:model="vendor_name">
                            @error('vendor_name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Vendor contact:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="Enter vendor contact" wire:model="vendor_contact">
                            @error('vendor_contact') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">Vendor email:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput4" placeholder="Enter vendor email" wire:model="vendor_email">
                            @error('vendor_email') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Vendor role:</label>
                            <select wire:model="vendor_role" id="exampleFormControlInput3">
                                <option value="" selected>Choose Role</option>
                                <option value="LOD">LOD</option>
                                <option value="FW">FW</option>
                                <option value="Both">Both</option>
                            </select>
                            @error('vendor_role') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">Vendor category :</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput4" placeholder="Enter vendor category" wire:model="vendor_category">
                            @error('vendor_category') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput5" class="block text-gray-700 text-sm font-bold mb-2">Remarks:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput4" placeholder="Enter remarks" wire:model="remarks">
                            @error('remarks') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="block">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model="Calibration"/>
                                    <span class="ml-2">Calibration</span>
                                </label>
                            </div>
                        </div>
                        <div class="block">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model="Premain"/>
                                    <span class="ml-2">Preventive Maintainance</span>
                                </label>
                            </div>
                        </div>
                        <div class="block">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model="OOrder" />
                                    <span class="ml-2">Out of order</span>
                                </label>
                            </div>
                        </div>
                        <div class="block">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model="Repair"/>
                                    <span class="ml-2">Under repair</span>
                                </label>
                            </div>
                        </div>
                        <div class="block">
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" wire:model="Maturity" />
                                    <span class="ml-2">Reach maturity</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Save
          </button>
        </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
                </div>
            </form>
        </div>

    </div>
</div>

