@extends("layouts.app")

@section("content")
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de productos") }}</h1>
            <a href="{{ route("productos.create") }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                {{ __("Crear producto") }}
            </a>
        </div>
    </div>
   <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th class="px-4 py-2">{{ __("Nombre") }}</th>
            <th class="px-4 py-2">{{ __("Precio") }}</th>
            <th class="px-4 py-2">{{ __("Descripcion") }}</th>
            <th class="px-4 py-2">{{ __("Tipo de Producto") }}</th>
            <th class="px-4 py-2">{{ __("Alta") }}</th>
            <th class="px-4 py-2">{{ __("Acciones") }}</th>
        </tr>
        </thead>
        <tbody>
        @forelse($productos as $producto)
            <tr>
                <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                <td class="border px-4 py-2">{{ $producto->precio }}</td>
                <td class="border px-4 py-2">{{ $producto->descripcion }}</td>
                <td class="border px-4 py-2">{{ $producto->tipo_de_producto }}</td>
                <td class="border px-4 py-2">{{ date_format($producto->created_at, "d/m/Y") }}</td>
                <td class="border px-4 py-2">
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
        <div class="mt-3">
            {{ $productos->links() }}
        </div>
    @endif
@endsection
