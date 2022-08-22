@extends('layouts.admin')

@section('content')

<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Product
                            <a href="{{ url('admin/products/') }}" class="btn btn-danger btn-sm text-white float-end">
                                BACK</a>
                        </h3>
                    </div>
                        <div class="card-body">     

                                @if ($errors->any())
                                <div class="alert alert-warning">
                                    @foreach ($errors->all() as $error)
                                        <div>{{$error}}</div>
                                    @endforeach
                                </div>
                                @endif

                            <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                            Home</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-pane" type="button" role="tab" aria-controls="seotag-pane" aria-selected="false">
                                            SEO Tags</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false"> 
                                            Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false"> 
                                            Product Image</button>
                                    </li>
                                </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane border p-4 fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                            <div class="mb3">
                                                <label>Category</label>
                                                <select name="category_id" class="form-control">
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb3">
                                                <label>Product Name</label>
                                                <input type="text" name="name" class="form-control"></input>
                                            </div>
                                            <div class="mb3">
                                                <label>Product Slug</label>
                                                <input type="text" name="slug" class="form-control"></input>
                                            </div>
                                            <div class="mb3">
                                                <label>Small Description (500 Words)</label>
                                                <textarea name="small_description" class="form-control" rows="4"></textarea>
                                            </div>
                                            <div class="mb3">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane border p-4 fade" id="seotag-pane" role="tabpanel" aria-labelledby="seotag" tabindex="0">
                                                <div class="mb3">
                                                    <label>Meta  Title</label>
                                                    <textarea name="meta_title" class="form-control" rows="4"></textarea>
                                                </div>
                                                <div class="mb3">
                                                    <label>Meta Keyword</label>
                                                    <input type="text" name="meta_keyword" class="form-control"></input>
                                                </div>
                                                <div class="mb3">
                                                    <label>Meta Description</label>
                                                    <input type="text" name="meta_description" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="tab-pane border p-4 fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                                            <div class="row">
                                                
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <div class="mb3">
                                                            <label>Original Price</label>
                                                            <input type="text" name="original_price" class="form-control" rows="4"></input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <div class="mb3">
                                                            <label>Selling Price</label>
                                                            <input type="text" name="selling_price" class="form-control" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <div class="mb3">
                                                            <label>Quantity</label>
                                                            <input type="text" name="quantity" class="form-control" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <div class="mb3">
                                                            <label>Trending</label>
                                                            <input type="checkbox" name="trending" style="width: 50px; height: 50px"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="mb3">
                                                            <label>Status</label>
                                                            <input type="checkbox" name="status" style="width: 50px; height: 50px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane border p-4 fade" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">  
                                            <div class="mb-3">
                                                    <label>Upload Product Image</label>  
                                                    <input type="file" name="image[]" multiple class="form-control"></input>  
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                    </div>
                </div>
            </div>
</div>


@endsection