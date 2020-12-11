<nav x-data="{ open: false }" class="bg-black border-0">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('./') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ url('./menu') }}" :active="request()->routeIs('menu')">
                        {{ __('Menú') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ url('./tienda') }}" :active="request()->routeIs('store')">
                        {{ __('Tienda') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ url('./sucursales') }}" :active="request()->routeIs('sucursales')">
                        {{ __('Sucursales') }}
                    </x-jet-nav-link>
                </div>
                @can('admin')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ url('./productos') }}" :active="request()->routeIs('sucursales')">
                            {{ __('CRUD Productos') }}
                        </x-jet-nav-link>
                    </div>
                @endcan
            </div>
        @auth
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <button class="flex items-center text-sm font-medium text-primary hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-primary focus:border-primary transition duration-150 ease-in-out">
                                <!--<div>{{ Auth::user()->name }}</div>-->
                                    <span class=""style="font-size: 36px; color: rgb(255,183,0);">
                                        <i class="fas fa-user-alt"></i>
                                    </span>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>

                            </button>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-primary font-bold">
                            {{ __('Ajustes de Cuenta') }}
                        </div>
                        <div class="border-t border-primary"></div>
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-primary">
                            {{ __(Auth::user()->name) }}
                        </div>
                        <div class="border-t border-primary"></div>
                        @can('NoUserFromFacebook')
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-jet-dropdown-link>
                        @endcan
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>
            @else
                @if (Route::has('login'))
                    <div class="hidden top-0 right-0 px-6 py-4 sm:flex">
                            <form action="{{ route('login') }}">
                                <x-jet-button class="ml-4">
                                    {{ __('Iniciar Sesion') }}
                                </x-jet-button>
                            </form>
                            @if (Route::has('register'))
                                <form action="{{ route('register') }}">
                                    <x-jet-button class="ml-4">
                                        {{ __('Registrate') }}
                                    </x-jet-button>
                                </form>
                            @endif
                    </div>
                @endif
            @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center bg-primario p-2 rounded-md text-black hover:text-black hover:bg-primario focus:outline-none focus:bg-primario focus:text-black transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ url('./menu') }}" :active="request()->routeIs('dashboard')">
                {{ __('Menu') }}
            </x-jet-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ url('./tienda') }}" :active="request()->routeIs('dashboard')">
                {{ __('Tienda') }}
            </x-jet-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ url('./sucursales') }}" :active="request()->routeIs('dashboard')">
                {{ __('Sucursales') }}
            </x-jet-responsive-nav-link>
        </div>
        @can('admin')
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ url('./productos') }}" :active="request()->routeIs('dashboard')">
                    {{ __('CRUD Productos') }}
                </x-jet-responsive-nav-link>
            </div>
        @endcan
    @auth
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-primary">
            <div class="flex items-center">
                <div class="ml-3">
                    <div class="font-medium text-base text-primary">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-primary">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                @can('NoUserFromFacebook')
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Perfil') }}
                </x-jet-responsive-nav-link>
                @endcan

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Cerrar Sesion') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
        @else
        <div class="border-t border-primary">
            <div class="my-3 space-y-1">
                @if (Route::has('login'))
                    <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('Iniciar Sesion') }}
                    </x-jet-responsive-nav-link>
                    @if (Route::has('register'))
                        <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                            {{ __('Registrate') }}
                        </x-jet-responsive-nav-link>
                    @endif
                @endif
            </div>
        </div>
        @endif
    </div>
</nav>
