<div class="border p-3 shadow-sm">
    <a href="{{route('product', ['product'=>$product->slug])}}"><img src="{{ $product->image }}" alt="" class="img-fluid"></a>
    <div class="h4"><a href="{{route('product', ['product'=>$product->slug])}}">{{ $product->name }}</a></div>
    <div class="h5 text-danger">{{ $product->price }}</div>
</div>
