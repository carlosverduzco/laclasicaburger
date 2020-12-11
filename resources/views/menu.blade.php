<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-center text-4xl font-bold">Menú</h1>
            <div class="flex flex-wrap justify-center md:justify-around items-center overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($productos as $producto)
                    <div class="p-5 m-10 w-52 min-h-menu-items bg-black overflow-hidden shadow-xl rounded-lg">
                        <div class="flex justify-between">
                            <div><p class="text-white text-3xl">{{$producto->nombre}}</p></div>
                            <div><p class="text-yellow-300 text-2xl">${{$producto->precio}}</p></div>
                        </div>
                        <div><p class="text-white text-xs overflow-clip overflow-hidden text-justify">{{$producto->descripcion}}</p></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
