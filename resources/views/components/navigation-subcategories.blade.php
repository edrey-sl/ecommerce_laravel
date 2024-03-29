@props(['category'])

<div class="grid grid-cols-4 p-4">
    <div class="">
        <p class="text-lg text-bold text-center text-trueGray-500 mb-3">Subcategorias</p>

        <ul>
            @foreach ($category->subcategories as $subcategory)
                <li>
                    <a href="" class="text-trueGray-500 font-semibold inline-block py-1 px-4 hover:text-amber-700 ">
                        {{$subcategory->name}}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>

    {{-- <div class="col-span-3">
        <img class="h-64 w-full object-cover object-center" src="{{storage::url($categories->first()->image)}}" alt="">
    </div> --}}

    <div class="col-span-3">
        <img class="h-64 w-full object-cover object-center" src="{{$category->image}}" alt="">
    </div>

</div>