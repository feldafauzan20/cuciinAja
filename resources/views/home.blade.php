<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    {{-- NAVBAR START --}}
    <x-navbar />
    {{-- NAVBAR END --}}

    {{-- HOME START --}}
    <section class="h-screen bg-blue-500" id="home">

        <div
            class="py-8 px-4 h-full mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative flex flex-col justify-center items-center">
            <div>
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    Hi, {{ auth()->user()->name }}</h1>
                <p class="mb-8 text-lg font-normal lg:text-xl sm:px-16 lg:px-48 text-white">
                    Pesan tiket cuci kendaraan Anda dengan praktis lewat CuciinAja. Cukup beberapa langkah,
                    jadwalkan
                    waktu, dan kendaraan Anda siap kembali bersih tanpa harus antre di tempat cuci steam.</p>
            </div>
        </div>
        <div
            class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0">
        </div>
    </section>
    {{-- HOME END --}}

    {{-- ABOUT START --}}
    <section id="about" class="py-20">
        <div class="max-w-screen-xl mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold text-center mb-6 text-blue-500">Tentang CuciinAja</h2>
            <p class="text-black text-lg font-extralight lg:text-center lg:text-3xl font-poppins text-justify">
                CuciinAja adalah platform yang memudahkan Anda dalam memesan layanan cuci kendaraan secara online. Kami
                menyediakan berbagai pilihan layanan cuci kendaraan yang dapat disesuaikan dengan kebutuhan Anda.
            </p>
        </div>
    </section>
    {{-- ABOUT END --}}

    {{-- PRODUCT CATALOG START --}}
    <section class="bg-blue-500 py-20 " id="catalog_product">
        <div>
            <h2 class="text-3xl font-bold text-center mb-6 text-white pt-8">Katalog Produk</h2>
        </div>
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:place-items-center px-4">
                @foreach ($products as $product)
                    <a
                        class="flex flex-col items-center bg-white border border-gray-200 w-full rounded-lg shadow-sm md:flex-row hover:bg-gray-100">
                        <img class="object-contain w-full rounded-t-lg h-96 md:h-48 md:w-48 md:rounded-none md:rounded-s-lg"
                            src="{{ asset('storage/' . $product->image) }}" alt="Car Wash Unsplash">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-500">
                                {{ $product->title }}

                            </h5>
                            <p class="mb-3 font-normal text-green-500">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</p>
                            <p class="mb-3 font-normal text-gray-700 text-justify">{{ $product->description }}</p>
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </section>

    {{-- PRODUCT CATALOG END --}}

    {{-- FOOTER START --}}
    <x-footer />
    {{-- FOOTER END --}}

</body>

</html>
