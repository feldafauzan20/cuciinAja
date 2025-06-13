<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>cuciinAja</title>
</head>

<body>
    {{-- NAVBAR START --}}
    <nav class=" bg-[#3674B5] font-poppins relative z-20">
        <div class="max-w-screen-xl  flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold text-white whitespace-nowrap ">cuciinAja</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="inline-block px-5 py-1.5 text-[#EDEDEC] hover:bg-white hover:text-black rounded-sm text-sm leading-normal transition-colors duration-200">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ url('login') }}"
                                class="inline-block px-5 py-1.5 text-[#EDEDEC] hover:bg-white  hover:text-black rounded-sm text-sm leading-normal transition-colors duration-200">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 text-[#EDEDEC] hover:bg-white hover:text-black rounded-sm text-sm leading-normal transition-colors duration-200">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>
    {{-- NAVBAR END --}}

    {{-- HERO START --}}
    <section class="h-screen bg-white">
        <div
            class="py-8 px-4 h-full mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative flex flex-col justify-center items-center">
            <div>
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-blue-500 md:text-5xl lg:text-6xl">
                    Solusi Praktis untuk Kendaraan Lebih Bersih</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 ">
                    CuciinAja hadir untuk memudahkan Anda dalam memesan jasa cuci kendaraan secara online. Bersih,
                    cepat, dan terpercaya langsung dari genggaman Anda</p>
            </div>
        </div>
        {{-- <div
            class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0">
        </div> --}}
    </section>
    {{-- HERO END --}}

    {{-- FOOTER START --}}
    <footer class="w-full bg-[#3674B5] text-white">
        <div class="max-w-screen-xl mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between">
            <div class="text-center md:text-left mb-2 md:mb-0">
                &copy; {{ date('Y') }} CuciinAja. All rights reserved.
            </div>
        </div>
    </footer>
    {{-- FOOTER END --}}

</body>

</html>
