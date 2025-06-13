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

    {{-- HERO START --}}
    <section class="min-h-screen h-full white" id="home">
        <div
            class="py-8 px-4 pt-36 h-full mx-auto max-w-screen-xl text-center z-10 relative flex flex-col  items-center">
            <div class="w-full shadow-2xl border border-[#578FCA]  p-3 rounded-lg">

                <div class="w-full border-b border-[#578FCA] p-4 mb-8">
                    <h2 class="text-start text-[#578FCA] text-xl font-bold font-poppins">LANGKAH PEMESANAN</h2>
                </div>
                <div class="w-full">
                    <ol class="flex items-center w-full text-sm font-medium text-center text-[#578FCA] ">
                        <li
                            class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-[#578FCA]after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 ">
                            <span
                                class="flex items-center after:content-['->'] sm:after:hidden after:mx-1 after:text-[#578FCA] ">
                                <span class="me-2 lg:hidden">1</span>
                                Isi form pemesanan
                            </span>
                        </li>
                        <li
                            class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-[#578FCA]after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 ">
                            <span
                                class="flex items-center after:content-['->'] sm:after:hidden after:mx-1 after:text-[#578FCA] ">
                                <span class="me-2 lg:hidden">2</span>
                                Tunggu konfirmasi
                            </span>
                        </li>
                        <li class="flex items-center">
                            <span class="me-2 lg:hidden">3</span>
                            Pesanan diterima
                        </li>
                    </ol>
                </div>
                <div class="w-full mt-20">
                    <div class="w-fit rounded-full px-2 py-3 border border-[#333446] ">
                        <h3 class="text-[#333446]  text-start">Form Pemesanan</h3>
                    </div>
                </div>
                <div class="w-full  mt-7 h-full">
                    <form class=" mx-auto h-full" action="{{ route('order.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_name" id="floating_name"
                                class="block py-2.5 px-0 w-full text-sm text-[#333446] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                                placeholder=" " required />
                            <label for="floating_name"
                                class="peer-focus:font-medium absolute text-sm text-[#333446]  duration-300 transform -translate-y-6 scale-75 top-3 left-0 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-[#333446] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" name="floating_notelp" id="floating_notelp"
                                class="block py-2.5 px-0 w-full text-sm text-[#333446] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                                placeholder=" " required />
                            <label for="floating_notelp"
                                class="peer-focus:font-medium absolute text-sm text-[#333446]  duration-300 transform -translate-y-6 scale-75 top-3 left-0 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-[#333446] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nomor Telepon
                            </label>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <h3 class="text-start text-[#333446] pb-2">Pilih Layanan Pencucian: </h3>
                            @foreach ($products as $product)
                                <div class="flex items-center text-start mb-2 ps-4 border border-gray-200 rounded-sm ">
                                    <label class="w-full py-4 ms-2 text-sm font-medium text-[#333446]">
                                        <input name="jenis_pencucian[]" data-price="{{ $product->price }}"
                                            type="checkbox" value="{{ $product->title }}"
                                            class="w-4 h-4 text-green-500 bg-gray-100 border-gray-300 rounded-sm focus:ring-green-500 focus:ring-2">
                                        {{ $product->title }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="price" class="block mb-2 text-sm text-start text-[#333446]">Harga</label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-white bg-blue-600 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md">
                                    Rp
                                </span>

                                <input type="number" id="price" name="price" disabled
                                    class="rounded-none rounded-e-lg  border text-[#333446] focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                                    placeholder="Akan terisi jika anda sudah memilih layanan pencucian" />

                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <select name="bank" id="bank"
                                class="block py-2.5 px-2 w-full text-sm text-[#333446] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                                required>
                                <option value="" disabled selected class=" text-white">Pilih Bank
                                </option>
                                <option value="bca" class="bg-blue-400/80 text-white">2007200373 BCA a.n Felda
                                    Fauzan
                                    Alfajr</option>
                                <option value="bri" class="bg-blue-400/80 text-white">2007200373 BRI a.n Felda
                                    Fauzan
                                    Alfajr</option>
                                <option value="bni" class="bg-blue-400/80 text-white">2007200373 BNI a.n Felda
                                    Fauzan
                                    Alfajr</option>
                                <option value="mandiri" class="bg-blue-400/80 text-white">2007200373 Mandiri a.n Felda
                                    Fauzan Alfajr</option>
                                <option value="cimb" class="bg-blue-400/80 text-white">2007200373 CIMB Niaga a.n
                                    Felda
                                    Fauzan Alfajr</option>
                                <option value="danamon" class="bg-blue-400/80 text-white">2007200373 Danamon a.n Felda
                                    Fauzan Alfajr</option>
                            </select>
                            <label for="bank"
                                class="peer-focus:font-medium absolute text-sm text-[#333446] duration-300 transform -translate-y-6 scale-75 top-3 left-0 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-[#333446] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama Bank
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="file" name="bukti_transfer" id="bukti_transfer"
                                class="block py-2.5 px-0 w-full text-sm text-[#333446] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer"
                                required />
                            <label for="bukti_transfer"
                                class="peer-focus:font-medium absolute text-sm text-[#333446] duration-300 transform -translate-y-6 scale-75 top-3 left-0 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-[#333446] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Upload Bukti Transfer
                            </label>
                        </div>

                        <button type="submit"
                            class="text-blue-700 bg-white hover:cursor-pointer hover:text-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
                    </form>

                </div>
            </div>
        </div>



    </section>
    {{-- HERO END --}}

    {{-- FOOTER START --}}
    <x-footer />
    {{-- FOOTER END --}}

</body>

</html>
