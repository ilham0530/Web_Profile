@extends('layout.homepage')

@section('content')

<section class="bg-gray-100 dark:bg-gray-800">
    <div class="w-full max-w-screen-xl p-2 py-4 mx-auto lg:py-6">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <div class="col-span-2"><img class="h-auto max-w-md" src="{{ asset('img/Profile (1).png') }}" alt=""></div>
            </div>
            <div class="grid grid-cols-1 gap-8 sm:gap-2 sm:grid-cols-1">
                <h2 class="self-center text-2xl dark:text-white">ILHAM MAULANA</h2>
                <p class=" dark:text-white text-justify">Seorang pengembang frontend pemula yang bersemangat dari Cirebon, Indonesia. Saya memiliki minat untuk mengembangkan situs web sebagai full-stack Web developer. Saya memiliki keterampilan dalam html, dan css, tetapi bersedia untuk mempelajari apa pun yang diperlukan untuk menyelesaikan masalah secara efisien. Saya juga suka melakukan evaluasi pada diri saya sendiri untuk meningkatkan keterampilan dan pengetahuan. Fokus utama saya adalah membangun keterampilan, koneksi yang baik, dan pengetahuan. Saya akan melakukan yang terbaik dalam mengerjakan tugas yang diberikan dan menghargai kesempatan untuk belajar lebih banyak tentang pengembangan web.</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
            <hr class="my-6 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <h1>RIWAYAT PENDIDIKAN</h1>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-900 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Universitas Negeri Semarang</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Gelar Sarjana Teknik Informatika</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Augustus 2021 - Sekarang</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Location
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-900 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SMA Negeri 7 Kota Cirebon</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ilmu Pengetahuan Alam</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Juli 2018 - Mei 2021</p>

                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Location
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

            <svg class="w-5 h-5" viewBox="-52.5 0 361 361" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"><path d="M255.555 70.766l-23.241 260.36-104.47 28.962-104.182-28.922L.445 70.766h255.11z" fill="#E44D26"/><path d="M128 337.95l84.417-23.403 19.86-222.49H128V337.95z" fill="#F16529"/><path d="M82.82 155.932H128v-31.937H47.917l.764 8.568 7.85 88.01H128v-31.937H85.739l-2.919-32.704zM90.018 236.542h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58l-.14.037-35.568-9.604-2.274-25.471z" fill="#EBEBEB"/><path d="M24.18 0h16.23v16.035h14.847V0h16.231v48.558h-16.23v-16.26H40.411v16.26h-16.23V0zM92.83 16.103H78.544V0h44.814v16.103h-14.295v32.455h-16.23V16.103h-.001zM130.47 0h16.923l10.41 17.062L168.203 0h16.93v48.558h-16.164V24.49l-11.166 17.265h-.28L146.35 24.49v24.068h-15.88V0zM193.21 0h16.235v32.508h22.824v16.05h-39.06V0z"/><path d="M127.89 220.573h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576H127.89v31.937zM127.89 155.854v.078h77.143l.64-7.178 1.456-16.191.763-8.568H127.89v31.86z" fill="#FFF"/></svg>
        </div>


    </div>

</section>

@endsection
