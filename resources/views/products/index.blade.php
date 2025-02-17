<x-layout>

    <div>


        <h1>List of Products</h1>
        @foreach ($products as $product)
        <a href="{{route('products.show', $product->id )}}">This is {{ $product->name }}</a><br>
        <p> : {{ $product->description }}</p>
        @endforeach
    </div>
</x-layout>