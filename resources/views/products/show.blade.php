<x-layout>

    <div>


        <h1> {{ $product->name }}</h1>

        <p>This is x: {{ $product->description }}</p>
        <a href="{{route('products.edit',  $product->id)}}">Edit product</a>

        <form method="post" action="{{route('products.destroy',  $product)}}">
            @csrf
            @method('DELETE')
            <button>DELETE</button>
        </form>
    </div>
</x-layout>