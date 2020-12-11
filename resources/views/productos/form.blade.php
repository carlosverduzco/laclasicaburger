<div class="w-full max-w-lg">
    <div class="w-full max-w-lg">
        <div class="flex flex-wrap">
            <h1 class="mb-5">{{ $title }}</h1>
        </div>
    </div>

    <form class="w-full max-w-lg" method="POST" action="{{ $route }}">
        @csrf
        @isset($update)
            @method("PUT")
        @endisset
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                    {{ __("Nombre") }}
                </label>
                <input name="nombre" value="{{ old("nombre") ?? $producto->nombre }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text">
                <p class="text-gray-600 text-xs italic">{{ __("Nombre del producto") }}</p>
                @error("nombre")
                <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="precio">
                    {{ __("Precio") }}
                </label>
                <input name="precio" value="{{ old("precio") ?? $producto->precio }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="precio" type="number" min="30" max="500">
                <p class="text-gray-600 text-xs italic">{{ __("Precio del producto") }}</p>
                @error("precio")
                <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="categoria_id">
                    {{ __("Categoria") }}
                </label>
                <select name="categoria_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="categoria_id">
                @foreach($categorias as $categoria)
                    <option id="categoria_id" value="{{$categoria->id}}" {{($categoria->id == $producto->categoria_id) ? 'selected' : ''}}>{{$categoria->nombre}}</option>
                @endforeach
                </select>
                <p class="text-gray-600 text-xs italic">{{ __("Categoria") }}</p>
                @error("categoria_id")
                <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="categoria_id">
                    {{ __("Agregados") }}
                </label>
                <select name="agregado_id[]" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="agregado_id" multiple>
                    @foreach($agregados as $agregado)
                        <option id="agregado_id" value="{{$agregado->id}}" {{in_array($agregado->id,$producto->agregados->pluck('id')->toArray()) ? 'selected' : ''}}>{{$agregado->nombre}}</option>
                    @endforeach
                </select>
                <p class="text-gray-600 text-xs italic">{{ __("Agregados") }}</p>
                @error("agregado_id")
                <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="descripcion">
                    {{ __("Descripción") }}
                </label>
                <textarea name="descripcion" class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="descripcion">{{ old("descripcion") ?? $producto->descripcion }}</textarea>
                <p class="text-gray-600 text-xs italic">{{ __("Descripción del Producto") }}</p>
                @error("descripcion")
                <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3">
                <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    {{ $textButton }}
                </button>
            </div>
        </div>
    </form>
</div>
