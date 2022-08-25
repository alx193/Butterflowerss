@extends('layouts.admin')

@section('content')


<div class="row">
            <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif    
                <div class="card">
                    <div class="card-header">
                        <h3>Add Slider
                            <a href="{{ url('admin/slider/') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/slider') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" />
                                    @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Status</label><br/>
                                    <input type="checkbox" name="status" style="width:30px; height:30px"/>
                                Checked=Hidden, Unchecked=Visible
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
@endsection