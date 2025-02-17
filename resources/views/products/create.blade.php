<x-layout>

    <div>


        <h1>Add new product item</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{route('products.store')}}">
            @csrf
            <label for="name"> Name</label>
            <input type="text" id="name" name="name">

            <label for="description"> Description</label>
            <textarea id="description" name="description"></textarea>

            <label for="size">Quantity</label>
            <input type="text" id="size" name="size">
            <button type="submit">ADD</button>
        </form>

    </div>
</x-layout>