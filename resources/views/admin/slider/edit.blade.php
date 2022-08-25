@extends('layouts.admin')

@section('content')


<div class="row">
            <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif    
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Slider
                            <a href="{{ url('admin/slider/') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/slider/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{ $slider->title }}" class="form-control" />
                                    @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3">{{ $slider->description }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" />
                                    <img scr="{{ asset("$slider->image") }}" style: 50px; height: 50px alt="slider"/>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Status</label><br/>
                                    <input type="checkbox" name="status" {{  $slider->status == '1' ? 'checked' : '' }} style="width:30px; height:30px"/>
                                Checked=Hidden, Unchecked=Visible
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
@endsection