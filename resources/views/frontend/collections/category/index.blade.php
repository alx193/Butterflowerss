@extends('layouts.app')

@section('title', 'Toate Categoriile')

@section('content')

                    
<div class="py-5 py-md-5 bg-light">
        <div class="container">
                    
            <div class="row">
                <div class="row-md-8">
                    <h4 class="mb-4">Toate Categoriile</h4>
                </div>
                @forelse ($categories as $categoryItem)
                <div class="col-9 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('collections/'.$categoryItem->slug) }}">
                            {{-- <div class="category-card-img">
                            <img src="{{ asset("$categoryItem->image") }}">
                            </div> --}}
                            <div class="category-card-body">
                                <h5>{{$categoryItem->name}}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                    <div class="col-md-12">
                        <h5>No categories Available</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection