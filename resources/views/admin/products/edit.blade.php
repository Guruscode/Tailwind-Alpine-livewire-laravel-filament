@extends('layouts.admin')


@section('content')



       <div class="row">
            <div class="col-md-12">
                   @if(session('message'))

                                        <h4 class="alert alert-success mb-2">{{session('message')}}</h4>
                                @endif
                    <div class="card">
                              <div class="card-header">
                                        <h3>Edit Product
                                         <a class="btn btn-danger btn-sm  text-white float-end" href="{{ url('admin/products')}}">Back</a>
                                        </h3>
                              </div>

                              <div class="card-body">
                             
                                @if($errors->all())
                                <div class="alert alert-warning">
                                        @foreach($errors->all() as $error)
                                        <div>{{$error}}</div>
                                        @endforeach
                                </div>
                                @endif
                                <form action="{{ url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data"> 
                                        @csrf
                                        @method('PUT')


                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="seotag" data-bs-toggle="tab" data-bs-target="#seotag-pane" type="button" role="tab" aria-controls="seotag-pane" aria-selected="false">SEO Tab</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="detailstab" data-bs-toggle="tab" data-bs-target="#detailstab-pane" type="button" role="tab" aria-controls="detailstab-pane" aria-selected="false">Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="imagetab" data-bs-toggle="tab" data-bs-target="#imagetab-pane" type="button" role="tab" aria-controls="imagetab-pane" aria-selected="false">Product Images</button>
                                        </li>
                                      
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                  <div class="mb-3">
                                                            <label>Category</label>
                                                            <select name="category_id"  class="form-control" id="">
                                                                      @foreach ($categories as $category)
                                                                          
                                                                      @endforeach
                                                            <option value="{{ $category->id}}" 
                                                                      {{ $category->id == $product->category_id ? 'selected':''}}>
                                                                       {{ $category->name}}
                                                                      </option>
                                                            </select>
                                                  </div>
                                                  <div class="mb-3">
                                                        <label >Product Name</label>
                                                                <input type="text" name="name" value="{{ $product->name}}" class="form-control" />
                                                  </div>
                                                       <div class="mb-3">
                                                        <label >Product Slug</label>
                                                                <input type="text" name="slug" value="{{ $product->slug}}"  class="form-control" />
                                                        </div>
                                                           <div class="mb-3">
                                                            <label>Select Brand</label>
                                                            <select name="brand"  class="form-control" id="">
                                                                      @foreach ($brands as $brand)
                                                                          
                                                                      @endforeach
                                                                      <option value="{{ $brand->name}}"  
                                                                      {{ $brand->name == $product->brand ? 'selected':''}}> 
                                                                      {{ $brand->name}}</option>
                                                            </select>
                                                  </div>
                                                  <div class="mb-3">
                                                        <label >Small Description (500 words)</label>
                                                                <textarea name="small_description" class="form-control"  rows="4">{{ $product->small_description}}</textarea>
                                                  </div>
                                                      <div class="mb-3">
                                                        <label >Description</label>
                                                                <textarea name="description" class="form-control"  rows="4">{{ $product->description}}</textarea>
                                                  </div>
                                        </div>
                                        <div class="tab-pane fade" id="seotag-pane" role="tabpanel" aria-labelledby="seotag" tabindex="0">
                                                 <div class="mb-3">
                                                        <label >Meta Title</label>
                                                                <input type="text" name="meta_title" value="{{ $product->meta_title}}" class="form-control" />
                                                        </div>
                                                         <div class="mb-3">
                                                        <label >Meta Description </label>
                                                                <textarea name="meta_description"  class="form-control"  rows="4">{{ $product->meta_description}}</textarea>
                                                  </div>
                                                   <div class="mb-3">
                                                        <label >Meta Keyword</label>
                                                                <textarea name="meta_keyword" class="form-control"  rows="4">{{ $product->meta_keyword}}</textarea>
                                                  </div>

                                        </div>
                                        <div class="tab-pane fade" id="detailstab-pane" role="tabpanel" aria-labelledby="detailstab" tabindex="0">
                                                <div class="row">
                                                        <div class="col-md-4">
                                                                <div class="mb-3">
                                                        <label >Original Price</label>
                                                                <input type="text" name="original_price" value="{{ $product->original_price}}" class="form-control" />
                                                        </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                                <div class="mb-3">
                                                        <label >Selling Price</label>
                                                                <input type="text" name="selling_price" value="{{ $product->selling_price}}" class="form-control" />
                                                        </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                                <div class="mb-3">
                                                        <label > Quantity</label>
                                                                <input type="text" name="quantity" value="{{ $product->quantity}}" class="form-control" />
                                                        </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                                <div class="mb-3">
                                                        <label >Trending</label>
                                                                  <input type="checkbox" {{ $product->trending == '1' ? 'checked':''}} name="trending" style="width:50px; height:50px;" />
                                                        </div>
                                                        </div>
                                                         <div class="col-md-4">
                                                                <div class="mb-3">
                                                        <label >Status</label>
                                                                <input type="checkbox" {{ $product->status == '1' ? 'checked':''}} name="status" style="width:50px; height:50px;" />
                                                        </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="tab-pane fade" id="imagetab-pane" role="tabpanel" aria-labelledby="imagetab" tabindex="0">
                                                <div class="mb-3">
                                                        <label>Upload product Images</label>
                                                        <input type="file" multiple name="image[]" class="form-control">
                                                </div>
                                                <div>
                                                  @if($product->productImages)
                                                  @foreach ($product->productImages as $image)
                                                      
                                                  
                                                  <img src="{{ asset($image->image) }}" style="width: 80px; height:80px;" 
                                                  class="me-4 border" alt="img" />
                                                  <a href="{{url('admin/product-image/'.$image->id.'/delete')}}">Remove</a>
                                                  @endforeach
                                                  @else
                                                  <h5>No image Added</h5>

                                                  @endif
                                                </div>
                                        </div>

                                    <div class="py-2 float-end">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </form>
                                        </div>
                              </div>
                    </div>
          </div>
</div>


@endsection