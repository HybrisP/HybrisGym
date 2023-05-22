<x-main>
    <x-slot name="title">Detail</x-slot>
    @foreach ($classes as $class)
    @if ($ref == strtolower($class['name']))
        <h1>{{$class['name']}}</h1>
    @endif
    @endforeach
</x-main>