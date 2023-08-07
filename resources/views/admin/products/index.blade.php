@extends('layouts.admin')


@section('content')



       <div class="row">
            <div class="col-md-12">
                    <div class="card">
                              <div class="card-header">
                                        <h3> Product
                                         <a class="btn btn-primary btn-sm  text-white float-end" href="{{ url('admin/products/create')}}">Add Products</a>
                                        </h3>
                              </div>
                              <div class="card-body">
                              </div>
                    </div>
          </div>
</div>


@endsection