@extends('layout.homepage')

@section('content')

<section class="bg-gray-200 dark:bg-gray-800" id="home-page">
    <div class="w-full max-w-screen-xl p-2 py-4 mx-auto lg:py-6">
        <div class="items-center md:flex md:justify-between">
            <div class="">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Hallo,<span class="text-blue-600 dark:text-blue-500"><br>i'm Ilham Maulana </span></h1>
                <a href="#about" class="inline-flex items-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg justify-left hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    tentang saya
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                </a>
            </div>
            <div class="w-80 h-80 md:mb-0 sm:flex sm:items-center">
                <div class="col-span-2"><img class="h-60 w-60 sm:w-56 sm:h-56" src="{{ asset('img/Profile (1).png') }}" alt=""></div>
            </div>
        </div>

        {{-- about me --}}

        <div id="about" class="mt-60">
            {{-- tentang saya --}}
            <div class="w-full text-center">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Deskripsi Diri</h1>
                <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                <p class="my-10 mx-4 text-sm text-center sm:mx-16 text-gray-700 dark:text-white sm:text-xl">Seorang pengembang frontend pemula yang bersemangat dari Cirebon, Indonesia. Saya memiliki minat untuk mengembangkan situs web sebagai full-stack Web developer. Saya memiliki keterampilan dalam html, dan css, tetapi bersedia untuk mempelajari apa pun yang diperlukan untuk menyelesaikan masalah secara efisien. Saya juga suka melakukan evaluasi pada diri saya sendiri untuk meningkatkan keterampilan dan pengetahuan. Fokus utama saya adalah membangun keterampilan, koneksi yang baik, dan pengetahuan. Saya akan melakukan yang terbaik dalam mengerjakan tugas yang diberikan dan menghargai kesempatan untuk belajar lebih banyak tentang pengembangan web.</p>
            </div>


            {{-- pengalaman organisasi --}}
            <div class="w-full text-center">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Pengalaman Organisasi</h1>
                <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />

                <div class="my-10">
                    <div class="flex justify-center">
                        <div class="grid grid-cols-1">
                            <div class="mb-10 p-5 max-w-xl sm:max-w-3xl bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                <div class="flex">
                                    <img src="{{ asset('logo/secret.png') }}" class="w-12 h-12" alt="I-secret Logo"/>
                                    <h5 class="ml-5 mt-2 text-left mb-2 text-lg sm:text-2xl font-semibold text-gray-900 dark:text-white">I-Secret</h5>
                                    <p class="ml-2 sm:ml-6 mt-3 sm:text-base text-xs font-bold text-gray-400 dark:text-gray-300">  -Semarang, Indonesia</p>
                                    <p class="sm:ml-32  ml-4 mt-3 sm:text-base text-xs font-bold text-black dark:text-white">Januari 2023 - Sekarang</p>
                                </div>
                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                <h6 class=" mt-2 italic text-left text-base sm:text-lg font-semibold text-gray-800 dark:text-white">Ketua Divisi Pemrograman</h6>
                                <p class="text-left text-sm font-semibold text-gray-400 dark:text-gray-300"">Underbow di bawah naungan Hima Ilkom Universitas Negeri Semarang.</p>
                                <ul class="mt-2 text-left list-disc list-inside ml-2 text-sm dark:text-white">
                                    <li>
                                        Bertanggung jawab untuk melaksanakan Latihan Pemrograman Rutin.
                                    </li>
                                    <li >
                                        Bertanggung jawab sebagai pemimpin tim untuk mengelola tim yang terdiri dari 12 orang.
                                    </li>
                                </ul>
                                <a href="https://www.instagram.com/isecretilkom/" target="_blank" class="flex justify-end mt-4  text-gray-500 hover:text-gray-900 dark:hover:text-white" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-5 max-w-xl sm:max-w-3xl bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                <div class="flex">
                                    <img src="{{ asset('logo/ss.png') }}" class="w-12 h-12" alt="ScreenShot Logo"/>
                                    <h5 class="ml-5 mt-2 text-left mb-2 text-lg sm:text-2xl font-semibold text-gray-900 dark:text-white">Screenshot</h5>
                                    <p class="ml-2 sm:ml-6 mt-3 sm:text-base text-xs font-bold text-gray-400 dark:text-gray-300">  -Semarang, Indonesia</p>
                                    <p class="sm:ml-20 ml-4 mt-3 sm:text-base text-xs font-bold text-black dark:text-white">Januari 2023 - Sekarang</p>
                                </div>
                                <hr class="mt-2 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3">
                                <h6 class=" mt-2 italic text-left text-base sm:text-lg font-semibold text-gray-800 dark:text-white">Ketua Divisi Desain dan Animasi</h6>
                                <p class="text-left text-sm font-semibold text-gray-400 dark:text-gray-300"">Underbow di bawah naungan Hima Ilkom Universitas Negeri Semarang.</p>
                                <ul class="mt-2 text-left list-disc list-inside ml-2 text-sm dark:text-white">
                                    <li>
                                        Bertanggung jawab untuk mengimplementasikan Latihan desain.
                                    </li>
                                    <li >
                                        Bertanggung jawab sebagai pemimpin tim untuk mengelola tim yang terdiri dari 9 orang.
                                    </li>
                                </ul>
                                <div class="flex justify-end mt-4">
                                    <a href="https://www.youtube.com/@screenshotilkom3422" target="_blank" class=" text-gray-500 hover:text-gray-900 dark:hover:text-white" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/screenshotilkom/" target="_blank" class="ml-5 text-gray-500 hover:text-gray-900 dark:hover:text-white" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- riwayat akademi --}}
            <div class="mt-10">
                <div class="items-center w-full text-center">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Riwayat Pendidikan</h1>
                    <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                </div>
                <div class="md:flex md:justify-around ">
                    <div class="grid sm:grid-cols-2">
                        <div class="mb-10 m-10">
                            <div id="card-hover" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                <img class="w-full h-56 rounded-t-lg" src="{{ asset('img/unnes.jpg') }}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Universitas Negeri Semarang</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Gelar Sarjana Teknik Informatika</p>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Agustus 2021 - Sekarang</p>
                                    <a target="_blank" href="https://goo.gl/maps/tZjC4Bw9TXatYhnx9" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Location
                                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="m-10">
                            <div id="card-hover" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                <img class="w-full h-56 rounded-t-lg" src="{{ asset('img/sma.jpg') }}" alt="" />
                                <div class="p-5">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SMA Negeri 7 Kota Cirebon</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ilmu Pengetahuan Alam</p>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Juli 2018 - Mei 2021</p>
                                    <a target="_blank" href="https://goo.gl/maps/HHZiLqhFLjTdyQ1b9" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Location
                                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            {{-- portofolio --}}
            <div class="w-full text-center mt-14">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Portofolio</h1>
                    <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
                </div>
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-80 overflow-hidden rounded-lg" style="height:450px">
                         <!-- Item 1 -->
                        <div class="hidden delay-200 ease-in-out" data-carousel-item>
                            <div class="flex m-10">
                                <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-5 w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-5 w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <!-- Item 2 -->
                        <div class="hidden delay-200 ease-in-out" data-carousel-item>
                            <div class="flex m-10">
                                <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-5 w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-5 w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden delay-200 ease-in-out" data-carousel-item>
                            <div class="flex m-10">
                                <div class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-5 w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-5 w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:bg-gray-900 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full" src="{{ asset('img/portofolio (1).png') }}" alt="Portofolio image" />
                                    </a>
                                    <div class="px-5 pb-5">
                                        <a href="">
                                            <h5 class=" mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Judul Portofolio</h5>
                                        </a>
                                        <p class="text-sm dark:text-white">Deskripsi Singkat</p>

                                        <button class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center cursor-not-allowed text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" disabled>
                                            <a href="#" class="flex cursor-not-allowed" disabled>
                                                Selengkapnya
                                                <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                             </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>







            {{-- skill --}}
            <div class="w-full text-center mt-14">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Skill</h1>
                <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
            </div>
            <svg class="w-5 h-5" viewBox="-52.5 0 361 361" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"><path d="M255.555 70.766l-23.241 260.36-104.47 28.962-104.182-28.922L.445 70.766h255.11z" fill="#E44D26"/><path d="M128 337.95l84.417-23.403 19.86-222.49H128V337.95z" fill="#F16529"/><path d="M82.82 155.932H128v-31.937H47.917l.764 8.568 7.85 88.01H128v-31.937H85.739l-2.919-32.704zM90.018 236.542h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58l-.14.037-35.568-9.604-2.274-25.471z" fill="#EBEBEB"/><path d="M24.18 0h16.23v16.035h14.847V0h16.231v48.558h-16.23v-16.26H40.411v16.26h-16.23V0zM92.83 16.103H78.544V0h44.814v16.103h-14.295v32.455h-16.23V16.103h-.001zM130.47 0h16.923l10.41 17.062L168.203 0h16.93v48.558h-16.164V24.49l-11.166 17.265h-.28L146.35 24.49v24.068h-15.88V0zM193.21 0h16.235v32.508h22.824v16.05h-39.06V0z"/><path d="M127.89 220.573h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576H127.89v31.937zM127.89 155.854v.078h77.143l.64-7.178 1.456-16.191.763-8.568H127.89v31.86z" fill="#FFF"/></svg>
            {{-- blog --}}
            <div class="w-full text-center mt-14">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">My Blog</h1>
                <hr class="border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-3" />
            </div>



        </div>




    </div>

</section>

@endsection
