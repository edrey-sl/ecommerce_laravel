<header class="bg-trueGray-700 sticky top-0" x-data="dropdown()">
    <div class="max-w-7xl mx-auto px-4 sm: px-6 lg: px-8 flex items-center h-16">
        <a :class="{ 'bg-opacity-100 text-amber-700': open }" x-on:click="show()"
            class="flex flex-col items-center justify-center px-4 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <span class="text-sm">Categorias</span>
        </a>



        <a href="/" class="px-6">
            <x-jet-application-mark class="block h-9 w-auto" />
        </a>

        @livewire('search')

        <!-- Settings Dropdown -->
        @auth
            <div class="mx-6 relative">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">

                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>

                    </x-slot>
                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>


                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>
        @else
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <i class="fas fa-user-circle text-white text-3xl cursor-pointer mx-6"></i>
                </x-slot>

                <x-slot name="content">
                    <x-jet-dropdown-link href="{{ route('login') }}">
                        {{ __('Sesión') }}
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('register') }}">
                        {{ __('Registrar') }}
                    </x-jet-dropdown-link>

                </x-slot>
            </x-jet-dropdown>

        @endauth


        @livewire('dropdown-cart')
    </div>

    <nav id="navigation-menu" :class="{ 'block': open, 'hidden': !open }"
        class="bg-trueGray-700 bg-opacity-25 w-full absolute hidden">
        <div class="max-w-7xl mx-auto px-4 sm: px-6 lg: px-8 h-full">
            <div x-show="open" x-on:click.away="close()" class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach ($categories as $category)
                        <li class="navigation-link text-trueGray-500 hover:bg-amber-700 hover:text-white">
                            <a href="" class="py-2 px-4 text-sm flex items-center">
                                <span class="flex justify-center w-9">
                                    {!! $category->icon !!}
                                </span>

                                {{ $category->name }}
                            </a>

                            <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">

                                <x-navigation-subcategories :category="$category" />
                            </div>

                        </li>
                    @endforeach

                </ul>

                <div class="col-span-3 bg-gray-100">

                    <x-navigation-subcategories :category="$categories->first()" />
                </div>
            </div>
        </div>

    </nav>
</header>
