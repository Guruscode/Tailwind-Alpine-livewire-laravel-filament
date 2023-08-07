<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addBrand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Brand</h1>
        <button type="button" class="btn-close" wire:click="closeModal"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="storeBrand">
      <div class="modal-body">
        <div class="mb-3">
          <label for="">Brand Name</label>
          <input type="text" wire:model.defer="name" class="form-control" id="">
          @error('name') <small class="text-danger">{{ $message}} </small>@enderror
        </div>
          <div class="mb-3">
          <label for="">Brand Slug</label>
          <input type="text" wire:model.defer="slug" class="form-control" id="">
           @error('slug') <small class="text-danger">{{ $message}} </small>@enderror
        </div>
          <div class="mb-3">
          <label for="">Status</label> <br />
          <input type="checkbox" wire:model.defer="status"> Checked=hidden, un-checked= visible
           @error('status') <small class="text-danger">{{ $message}} </small>@enderror
        </div>
      </div>
  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click="closeModal"  data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
          </form>
    </div>
  </div>
</div>




<!-- Update Modal -->
<div wire:ignore.self class="modal fade" id="updateBrand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Brand</h1>
        <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div wire:loading class=" text-center p-2" >
        <div class="spinner-grow text-success" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
      </div>
      <div wire:loading.remove>
      <form wire:submit.prevent="updateBrand">
      <div class="modal-body">
        <div class="mb-3">
          <label for="">Brand Name</label>
          <input type="text" wire:model.defer="name" class="form-control" id="">
          @error('name') <small class="text-danger">{{ $message}} </small>@enderror
        </div>
          <div class="mb-3">
          <label for="">Brand Slug</label>
          <input type="text" wire:model.defer="slug" class="form-control" id="">
           @error('slug') <small class="text-danger">{{ $message}} </small>@enderror
        </div>
          <div class="mb-3">
          <label for="">Status</label> <br />
          <input type="checkbox" wire:model.defer="status"  > Checked=hidden, un-checked= visible
           @error('status') <small class="text-danger">{{ $message}} </small>@enderror
        </div>
      </div>
  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click="closeModal"  data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
          </form>
          </div>
    </div>
  </div>
</div>




<!-- Delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteBrand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Brand</h1>
        <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div wire:loading class=" text-center p-2" >
        <div class="spinner-grow text-success" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
      </div>
      <div wire:loading.remove>
      <form wire:submit.prevent="destroyBrand">
      <div class="modal-body">
       <h4>Are you sure you want to delete data?</h4>
      </div>
  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click="closeModal"  data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Yes Delete</button>
      </div>
          </form>
          </div>
    </div>
  </div>
</div>
