<x-main>
    <x-slot name="title">Class</x-slot>

    <div class="container-fluid row justify-content-center m-4">
        @foreach ($classes as $class)
            <div class="border rounded col-3 m-2 bg-dark bg-opacity-50" style="width: 18rem;">
                <img src="{{$class['img']}}" class="card-img-top py-2" alt="{{$class['name']}}">
                <h3 class="text-light text-center"><a href="{{route('detail', strtolower($class['name']))}}" style="text-decoration: none">{{$class['name']}}</a></h3>
                <p class="text-secondary fst-italic">{{$class['synopsis']}}</p>
            </div>
        @endforeach
    </div>
    
</x-main>