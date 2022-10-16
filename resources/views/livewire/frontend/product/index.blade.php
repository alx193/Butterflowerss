
<div class="row">
    <div class="col">
                <div class="col-md-9">
                    <div class="card">
                                <div class="card-header" ><h4>Pret</h4></div>
                                    <div class="card-body">
                                        <label>
                                            <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high" />Crescator
                                        </label>
                                        <label>
                                            <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low" />Descrescat
                                        </label>
                                    </div>
                                </div>
                    </div>
                </div>
                 <div class="col-md-10">
                            <div class="row">
                                    @forelse ($products as $productItem)
                                        <div class="col-md-4">
                                            <div class="product-card">
                                                <div class="product-card-img">
                                                   @if($productItem->new_product > 0)
                                                    <label class="stock bg-success">Nou</label>
                                                    @else
                                                   
                                                    @endif
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
                                                    {{-- </h5> --}}
                                                    <div>
                                                        <span class="selling-price">{{$productItem->selling_price}} RON</span>
                                                        {{-- <span class="original-price">{{$productItem->original_price}} RON</p></span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    @empty
                                        <div class="col-md-12">
                                            <div class="p-2">
                                                <h4>Nu sunt produse pentru categoria {{ $category->name }}</h4>
                                            </div>
                                        </div>
                                    @endforelse
                            </div>
                </div>    
    </div>   
</div>      




