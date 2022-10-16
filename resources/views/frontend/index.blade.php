@extends('layouts.app')

@section('title', 'Floraria butterflowerss')

                    

@section('content')

                    
    


{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

  <div class="carousel-inner">

            @foreach ($sliders as $key => $sliderItem )
                <div class="carousel-item {{ $key == 0 ? 'active' : ''}}" active>
                @if($sliderItem->image)
                <img src="{{ asset("$sliderItem->image") }}" class="d-block w-100" alt="...">
                @endif
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>{!! $sliderItem->title !!}</h1>
                        <p>{!! $sliderItem->description !!}</p>
                        <div>
                            <a href="collections/aranjamente-florale" class="btn btn-slider">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}


{{-- New Arrivals carousel start --}}

        <div class="py-1">
            <div class="container">
                <div class="row justify-content-cnter">
                    <div class="col-md-8 text-left">
                    @if($newArrivalsProducts->count() > 0)
                        <h4>Produse Noi</h4>
                        <div class="underline"></div>
                    @else 

                    @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="container">
                <div class="row">
                @if($newArrivalsProducts)
                    <div class="col-md-12">
                    <div class="owl-carousel owl-theme four-carousel">
                        @foreach ($newArrivalsProducts as $productItem)
                            <div class="item">
                                <div class="product-card">
                                    <div class="product-card-img">
                                        <label class="stock bg-success">Nou</label>
                                        @if ($productItem->productImages->count() > 0)
                                        <a href="{{ url('collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                        <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                        </a>
                                        @endif
                                    </div>
                                    <div class="product-card-body">
                                        <a href="{{ url('collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                                {{$productItem->name}}
                                        </a>
                                        </h5>
                                        <div>
                                            <span class="selling-price">{{$productItem->selling_price}} RON</span>
                                            {{-- <span class="original-price">{{$productItem->original_price}} RON</p></span> --}}
                                        </div>
                                    </div>
                                </div>       
                            </div>
                        @endforeach
                    </div> 
                    </div>
                @else
                        <div class="col-md-12">
                            <div class="p-2">
                                <h4>Nu exista produse noi</h4>
                            </div>
                        </div>
                @endif
                {{-- <div class="col-md-12">
                    <div class="p-2">
                        <h4 class="text-align-center">Nu exista produse noi</h4>
                    </div>
                </div>
                </div> --}}
            </div>
        </div>
{{-- New Arrivals carousel end --}}

{{-- Trending products owl carousel start --}}
<div class="py-1">
    <div class="container">
        <div class="row justify-content-cnter">
            <div class="col-md-8 text-left">
            @if($trendingProducts->count() > 0)
                <h4>Produse populare</h4>
                <div class="underline"></div>
             @else 

            @endif
            </div>
        </div>
    </div>
</div>

<div class="py-3">
    <div class="container">
        <div class="row">
        @if($trendingProducts)
              <div class="col-md-12">
              <div class="owl-carousel owl-theme four-carousel">
                  @foreach ($trendingProducts as $productItem)
                      <div class="item">
                          <div class="product-card">
                              <div class="product-card-img">
                                  {{-- <label class="stock bg-danger">New</label> --}}
                                  @if ($productItem->productImages->count() > 0)
                                  <a href="{{ url('collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                  <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                  </a>
                                  @endif
                              </div>
                              <div class="product-card-body">
                                  <a href="{{ url('collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                          {{$productItem->name}}
                                  </a>
                                  </h5>
                                  <div>
                                      <span class="selling-price">{{$productItem->selling_price}} RON</span>
                                      {{-- <span class="original-price">{{$productItem->original_price}} RON</p></span> --}}
                                  </div>
                              </div>
                          </div>       
                      </div>
                  @endforeach
              </div> 
              </div>
              @else
                  <div class="col-md-12">
                      <div class="p-2">
                          <h4>No Products Available</h4>
                      </div>
                  </div>
        @endif
        </div>
    </div>
</div>
{{-- Trending products owl carousel end --}}





@endsection

@section('script')

<script>
$('.four-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

</script>

@endsection