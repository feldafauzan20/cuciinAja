<nav class="bg-white font-poppins fixed w-full z-20">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold text-blue-500 whitespace-nowrap ">cuciinAja</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Logout</button>

                {{-- <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link> --}}
            </form>

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex hover:cursor-pointer items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white ">
                <li>
                    <a href="/home#home"
                        class="block py-2 px-3 rounded-sm md:bg-transparent hover:bg-blue-200 text-blue-700"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/home#about"
                        class="block py-2 px-3 rounded-sm md:bg-transparent hover:bg-blue-200 text-blue-700">About</a>
                </li>
                <li>
                    <a href="/home#catalog_product"
                        class="block py-2 px-3 rounded-sm md:bg-transparent hover:bg-blue-200 text-blue-700">Catalog
                        Product</a>
                </li>
                <li>
                    <a href="/history"
                        class="block py-2 px-3 rounded-sm md:bg-transparent hover:bg-blue-200 text-blue-700">History</a>
                </li>
                <li>
                    <a href="/order"
                        class="block py-2 px-3 rounded-sm md:bg-transparent hover:bg-blue-200 text-blue-700">Order</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
