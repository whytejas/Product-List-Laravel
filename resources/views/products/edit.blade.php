<x-layout>

    <div>


        <h1>Edit this product item</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{route('products.update', $product)}}">
            @csrf
            @method('PATCH')
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" value={{$product->name}}>

            <label for="description"> Description</label>
            <textarea id="description" name="description">{{$product->description}}</textarea>

            <label for="size">Quantity</label>
            <input type="text" id="size" name="size" value={{$product->size}}>
            <button type="submit">UPDATE</button>
        </form>

    </div>
</x-layout>