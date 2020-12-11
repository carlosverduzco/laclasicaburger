<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
                    <div class="text-center">
                        <h1 class="mb-5">{{ __("Listado de productos") }}</h1>
                        <a href="{{ route("productos.create") }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            {{ __("Crear producto") }}
                        </a>
                    </div>
                </div>
                <table class="w-full flex flex-row flex-no-wrap md:bg-white rounded-lg overflow-hidden md:shadow-lg my-5 text-center mt-3" style="width: 100%">
                    <thead>
                    @foreach($productos as $producto)
                    <tr class="bg-primario flex flex-col flex-no wrap md:table-row rounded-l-lg md:rounded-none mb-2 md:mb-0 ">
                        <th class="px-4 py-2">{{ __("Nombre") }}</th>
                        <th class="px-4 py-2">{{ __("Precio") }}</th>
                        <th class="px-4 py-2 md:h-auto h-32">{{ __("Descripcion") }}</th>
                        <th class="px-4 py-2 ">{{ __("Categoria") }}</th>
                        <th class="px-4 py-2 ">{{ __("Agregados") }}</th>
                        <th class="px-4 py-2 md:h-auto h-20">{{ __("Acciones") }}</th>
                    </tr>
                    @endforeach
                    </thead>
                    <tbody class="flex-1 md:flex-none">
                    @forelse($productos as $producto)
                        <tr class="flex flex-col flex-no wrap md:table-row mb-2 md:mb-0">
                            <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                            <td class="border px-4 py-2">{{ $producto->precio }}</td>
                            <td class="border px-4 py-2 md:h-auto h-32 overflow-ellipsis overflow-hidden">{{ $producto->descripcion }}</td>
                            <td class="border px-4 py-2 ">{{ $producto->categoria->nombre }}</td>
                            <td class="border px-4 py-2 ">Si</td>
                            <td class="border px-4 py-2 md:h-auto h-20">
                                <a href="{{ route("productos.show", ["producto" => $producto]) }}" class="text-blue-400">{{ __("Mostrar") }}</a> |
                                <a href="{{ route("productos.edit", ["producto" => $producto]) }}" class="text-blue-400">{{ __("Editar") }}</a> |
                                <a
                                    href="#"
                                    class="text-red-400"
                                    onclick="event.preventDefault();
                                        document.getElementById('delete-producto-{{ $producto->id }}-form').submit();"
                                >{{ __("Eliminar") }}
                                </a>
                                <form id="delete-producto-{{ $producto->id }}-form" action="{{ route("productos.destroy", ["producto" => $producto]) }}" method="POST" class="hidden">
                                    @method("DELETE")
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <p><strong class="font-bold">{{ __("No hay productos") }}</strong></p>
                                    <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                @if($productos->count())
                    <div class="mt-3 h-12">
                        {{ $productos->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
