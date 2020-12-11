<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex justify-center flex-wrap p-4 mt-5">
                    <div class="w-full max-w-lg">
                        <div class="w-full max-w-lg">
                            <div class="flex flex-wrap">
                                <h1 class="mb-5">{{ $title }}</h1>
                            </div>
                        </div>

                        <form class="w-full max-w-lg" method="GET" action="{{ $route }}">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                                        {{ __("Nombre") }}
                                    </label>
                                    <p class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        {{ $producto->nombre }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                                        {{ __("Precio") }}
                                    </label>
                                    <p class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        {{ $producto->precio }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                                            {{ __("Categoria") }}
                                        </label>
                                        <p class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                            {{ $producto->categoria->nombre}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                                            {{ __("Agregados") }}
                                        </label>
                                        @foreach($producto->agregados as $agregado)
                                            <p class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                {{ $agregado->nombre}}
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                                            {{ __("Descripcion") }}
                                        </label>
                                        <p class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                            {{ $producto->descripcion }}
                                        </p>
                                    </div>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
