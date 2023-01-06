@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<form wire:submit.prevent="submit" enctype="multipart/form-data">

    <div class="form-group">
        <label for="exampleInputName">Title</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputName">File</label>

        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <input type="file" class="form-control" id="exampleInputName" wire:model="name">
    <button type="submit">Save</button>
</form>
