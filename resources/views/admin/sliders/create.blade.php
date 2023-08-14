@extends('layouts.admin')


@section('content')



       <div class="row">
            <div class="col-md-12">
                @if (session('message'))
               <div class="alert alert-success"> {{ session('message')}}</div>
                @endif
                    <div class="card">
                              <div class="card-header">
                                        <h3>Add Slider
                                         <a class="btn btn-danger btn-sm  text-white float-end" href="{{ url('admin/colors/')}}">Back</a>
                                        </h3>
                              </div>
                              <div class="card-body">
                                        <form action="{{url('admin/sliders/create')}}" method="POST" enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="mb-3">
                                                            <label> Title</label>
                                                            <input type="text" name="title" class="form-control" />
                                                  </div>
                                                   <div class="mb-3">
                                                            <label>Description</label>
                                                            <textarea type="text" name="description" rows="10" class="form-control"></textarea>
                                                  </div>
                                                     <div class="mb-3">
                                                            <label> Image</label>
                                                            <input type="file" name="image" class="form-control" />
                                                  </div>
                                                   <div class="mb-3">
                                                            <label>Status</label>
                                                            <input type="checkbox" name="status"> 
                                                            Checked=Hidden, Unchecked=Visible
                                                  </div>
                                                   <div class="mb-3">
                                                           <button type="submit" class="btn btn-primary btn-sm float-left">Save</button>
                                                  </div>
                                        </form>     


                              </div>
                    </div>
          </div>
</div>


@endsection