<!doctype html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Butterflowerss Produse</title>

</head>
<body>
    <div class="py-3 py-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-3">
                <img src="{{ asset($product->productImages[0]->image) }}"  class="w-100" alt="Img">
                    {{-- <div class="bg-white border" wire:ignore>

                        @if($product->productImages)
                        
                        <div class="exzoom" id="exzoom">
                        <div class="exzoom_img_box">
                            <ul class='exzoom_img_ul'>
                            @foreach ($product->productImages as $itemImg)
                                <li><img src="{{ asset($itemImg->image) }}"/></li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                        <p class="exzoom_btn">
                            <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                            <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                        </p>
                        </div>
                        @else
                            No Image
                        @endif
                    </div> --}}
                </div>
                <div class="col-md-9 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{$product->name}}
                        </h4>
                        <hr>
                        <a class="product-path">
                            <p> Acasa / {{ $product->category->name }}  / {{ $product->name }} </p>
                        </a>
                        <div>
                            <span class="selling-price">{{ $product->selling_price }} RON</span>
                            {{-- <span class="original-price">{{ $product->original_price }} RON</span> --}}
                        </div>
                        {{-- <div>
                            @if ($product->quantity)
                             <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                             @else
                              <label class="btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                              @endif
                        </div> --}}
                        {{-- <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                <input type="text" value="1" class="input-quantity" />
                                <span class="btn btn1"><i class="fa fa-plus"></i></span>
                            </div>
                        </div> --}}
                        {{-- <div class="mt-2">
                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
                        </div> --}}
                        <div class="row"> <br>
                            <div class="col-md-12 mt-5">
                                <div class="card1">
                                    <div class="card-header bg-white">
                                            <h4>Descriere</h4>
                                            {{-- <h4>Optiuni Personalizare</h4> --}}
                                    </div>
                                          <div class="card-body">
                                             <p>
                                                {{-- {{ $product->small_description }} --}}
                                                {{ $product->description }}
                                             </p>
                                          </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card1">
                        <div class="card-header bg-white">
                            <h4>Descriere</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- @push('scripts')

    <script>
                    $(function(){
                        $("#exzoom").exzoom({
                            "navWidth": 80,
                            "navHeight": 80,
                            "navItemNum": 5,
                            "navItemMargin": 7,
                            "navBorder": 1,
                            "autoPlay": false,
                            "autoPlayTimeout": 2000
                    
                        });
                    });
    </script>

    @endpush --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>