<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Zahrani</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <!-- Header Start -->
    

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Portofolio</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Beranda</a>
          </li>
          <li>
            <a href="#about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang Saya</a>
          </li>
          <li>
            <a href="#portofolio" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portofolio</a>
          </li>
          <li>
            <a href="#skill" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Skill</a>
          </li>
          <li>
            <a href="#contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
    <!-- Header End -->


    <!-- Hero Section Star -->
     <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-dark md:text-xl lg:text-2xl">Hallo Semua 👋🏻, Saya 
                        <span class="block font-bold text-pink-400 text-4xl mt-1">
                        Zahrani Aulia Putri </span></h1>
                    <h2 class="font-medium text-black text-lg mb-5">Pelajar |
                        <span class="text-dark"> SMK Negeri 3 Banjar </span></h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed">Aku cantik, Masyaallah</p>
                    <a href="#contact">
                    <button type="button" class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 rounded-full focus:ring-blue-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi Saya</button>
                    </a>
                </div> 
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class=" relative mt-10 lg:mt-9 lg:right-0">
                        <img src="zhr.png.png" alt="Zahrani Aulia Putri" class="lg:max-w-full max-w-1/2 mx-auto rounded-3xl">
                        <span class="absolute -bottom-0 -z-10 left-1/2 -top-12 -translate-x-1/2 md:scale-100 ">
                            <svg width="800" height="800" class="" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#BBE9FF" d="M25.3,-43.2C36.9,-31.9,53.3,-31.8,61,-24.9C68.7,-18,67.7,-4.2,64.6,8.5C61.6,21.2,56.4,32.8,47.5,38.8C38.6,44.9,26.1,45.5,14.5,48.6C2.8,51.7,-7.8,57.4,-17.9,56.5C-28,55.7,-37.5,48.2,-47.9,39.6C-58.2,31,-69.4,21.3,-70.7,10.3C-72,-0.7,-63.5,-12.9,-54,-20.9C-44.5,-28.9,-34,-32.7,-24.8,-45.2C-15.6,-57.6,-7.8,-78.8,-0.5,-78C6.8,-77.2,13.7,-54.6,25.3,-43.2Z" transform="translate(100 100)" />
                            </svg>

                        </span>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- Hero Section End -->


     <!-- About Section Start -->
     <section id="about" class="pt-36 pb-32"> 
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-teal-400 text-lg mb-3">Tentang Saya</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Yuk, Cari tahu tentang zahrani..🙋🏻‍♀️</h2>
                    <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">Saya seorang pelajar kreatif yang berkomitmen untuk mengubah ide menjadi pengalaman visual yang menakjubkan. Dengan latar belakang pendidikan yang luar biasa dan pengalaman sederhana.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Mari Berteman</h3>
                    <p class="font-medium text-base text-slate-500 mb-6 lg:text-lg">"Bertemanlah tanpa menyisipkan harapan-harapan. Bergaullah tanpa menyimpan rasa. dan jangan mudah baper. Carilah teman yang bisa membawa mu ke jalan kebaikan "</p>
                       <div class="flex items-center">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/zhrxyie?igsh=MTFtN3VlMHRqM2FkOA==" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-300 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" fill-current" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 
                                1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 
                                1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>

                        <!-- Tiktok -->
                        <a href="https://tiktok.com/@zz_z080" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-300 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                            <svg role="img" width="24" height="24" class=" fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 
                                2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/profile.php?id=100084825065556" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-300 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" fill-current" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 
                                1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                        </a>

                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@ZahraniPutri-08" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" fill-current" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 
                                11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        </a>
                       </div>
                </div>
            </div>
        </div>
     </section>
     <!-- About Section End -->


     <!-- Portofolio Section Start -->
     <section id="portofolio" class=" pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-teal-400 mb-2">Portofolio</h4>
                    <h2 class="font-bold text-black text-3xl mb-4">Project</h2>
                    <p class="font-medium text-md text-slate-500">Halaman ini terdapat beberapa tampilan project yang telah saya buat sendiri.</p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="profilgithub.png" alt="Profil GitHub" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-black mt-5 mb-3">Profil GitHub</h3>
                    <p class="font-medium text-base text-slate-500">Ini adalah Projek tampilan Profil GitHub Zahrani</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="hasil1.png" alt="Toko Elektronik" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-black mt-5 mb-3">Toko Elektronik</h3>
                    <p class="font-medium text-base text-slate-500">Projek Website penjualan elektronik "Toko Sumber Jaya TV"</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="tuliscctan1.png" alt="Projek Tulis catatan" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-black mt-5 mb-3">Projek Aplikasi Peduli Diri</h3>
                    <p class="font-medium text-base text-slate-500">Projek membuat Aplikasi Peduli Diri, yang berada ditampilan Tulis Catatan Perjalanan</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="animasi.jpeg" alt="Animasi" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-black mt-5 mb-3">Animasi</h3>
                    <p class="font-medium text-base text-slate-500">Projek pembuatan Animasi pinguin bergerak diaplikasi Blender</p>
                </div>
            </div>
        </div>
     </section>
     <!-- Portofolio Section End -->


     <!-- Skill Section Start -->
     <section id="skill" class="pt-36 pb-32 bg-slate-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-teal-400 mb-2">Skill</h4>
                    <h2 class="font-bold text-black text-3xl mb-4">Skill Zahrani Aulia Putri</h2>
                    <p class="font-medium text-md text-slate-500">Skill yang dapat saya gunakan adalah Visual Studio Code, XAMPP, Microsoft Word, dan Figma.</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg p-6" src="vsc.png" alt="" width="100%"/>
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-slate-400">Visual Studio Code</h5>
                                    </a>
                                    <p class="mb-3 font-medium text-base text-gray-700 dark:text-gray-400">Visual Studio Code adalah editor kode gratis yang membantu Anda memulai membuat kode dengan cepat. Gunakan untuk membuat kode dalam bahasa pemrograman apa pun, tanpa harus beralih ke editor lain. Visual Studio Code mendukung banyak bahasa, termasuk Python, Java, C++, JavaScript, dan banyak lagi. </p>
                                    <a href="#" class="font-medium text-sm text-white bg-blue-400 py-2 px-4 rounded-lg hover:opacity-80">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg p-6" src="xampp.png" alt="" width="100%"/>
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-slate-400">XAMPP</h5>
                                    </a>
                                    <p class="mb-3 font-medium text-base text-gray-700 dark:text-gray-400">XAMPP adalah perangkat lunak bebas, yang mendukung banyak sistem operasi, merupakan kompilasi dari beberapa program. Fungsinya adalah sebagai server yang berdiri sendiri, yang terdiri atas program Apache HTTP Server, MySQL database, dan penerjemah bahasa yang ditulis dengan bahasa pemrograman PHP dan Perl.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-blue-400 py-2 px-4 rounded-lg hover:opacity-80">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg p-6" src="word.jpeg" alt="" width="100%"/>
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-slate-400">Microsoft Word</h5>
                                    </a>
                                    <p class="mb-3 font-medium text-base text-gray-700 dark:text-gray-400">Microsoft Word merupakan program aplikasi pengolah kata (word processor) yang yang biasa digunakan untuk membuat laporan, membuat dokumen berbentuk surat kabar, membuat label surat, membuat table pada dokumen, dan masih banyak lagi dukumen- dokumen lain yang biasa dibuat dengan menggunakan Microsoft Word.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-blue-400 py-2 px-4 rounded-lg hover:opacity-80">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg p-6" src="figma.png" alt="" width="100%"/>
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-slate-400">Figma</h5>
                                    </a>
                                    <p class="mb-3 font-medium text-base text-gray-700 dark:text-gray-400">Figma adalah sebuah aplikasi web kolaboratif untuk user interface, dengan fitur-fitur luring tambahan yang tersedia pada aplikasi desktop untuk Windows dan macOS.</p>
                                    <a href="#" class="font-medium text-sm text-white bg-blue-400 py-2 px-4 rounded-lg hover:opacity-80">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
     </section>
     <!-- Skill Section End -->


     <!-- Contact Section Start -->
     <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-teal-400 mb-2">Contact</h4>
                    <h2 class="font-bold text-black text-3xl mb-4">Hubungi Saya</h2>
                    <p class="font-medium text-md text-slate-500">Jika anda tertarik dengan saya, bisa hubungi saya dihalaman ini!</p>
                </div>
            </div>
            <form>
            <div class="w-full px-4 mb-8">
                <label for="name" class="text-base font-bold text-teal-400">Nama</label>
                <input type="text" id="name" class=" w-full bg-slate-200 text-black p-3 rounded-md focus:outline-none focus:ring-teal-400 focus:ring-1 focus:border-teal-400">
            </div>
            <div class="w-full px-4 mb-8">
                <label for="email" class="text-base font-bold text-teal-400">Email</label>
                <input type="email" id="email" class=" w-full bg-slate-200 text-black p-3 rounded-md focus:outline-none focus:ring-teal-400 focus:ring-1 focus:border-teal-400">
            </div>
            <div class="w-full px-4 mb-8">
                <label for="message" class="text-base font-bold text-teal-400">Pesan</label>
                <textarea type="text" id="name" class=" w-full bg-slate-200 text-black p-3 rounded-md focus:outline-none focus:ring-teal-400 focus:ring-1 focus:border-teal-400 h-32">
                </textarea>
            </div>
            <div class="w-full px-4">
                <button class=" text-base font-semibold text-white bg-blue-400 py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
            </div>
            </form>
        </div>
     </section>
     <!-- Contact Section End -->


     <!-- Footer Start -->
     <footer class=" bg-black pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class=" font-bold text-4xl text-white mb-5">Contact</h2>
                    <h3 class=" font-bold text-2xl mb-2">Hubungi Saya</h3>
                    <p>zahranip98@gmail.com</p>
                    <p>Link.Margasari RT 04/RW 05,Kec.Langensari. Kota Banjar,</p>
                    <p>Jawa Barat</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class=" font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#" class=" inline-block text-base hover:text-teal-400 mb-3">Programming</a>
                        </li>
                        <li>
                            <a href="#" class=" inline-block text-base hover:text-teal-400 mb-3">Teknologi</a>
                        </li>
                        <li>
                            <a href="#" class=" inline-block text-base hover:text-teal-400 mb-3">Gaya Hidup</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class=" font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class=" text-slate-300">
                        <li>
                            <a href="#home" class=" inline-block text-base hover:text-teal-400 mb-3">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class=" inline-block text-base hover:text-teal-400 mb-3">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#portofolio" class=" inline-block text-base hover:text-teal-400 mb-3">Portofolio</a>
                        </li>
                        <li>
                            <a href="#skill" class=" inline-block text-base hover:text-teal-400 mb-3">Skill</a>
                        </li>
                        <li>
                            <a href="#contact" class=" inline-block text-base hover:text-teal-400 mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/zhrxyie?igsh=MTFtN3VlMHRqM2FkOA==" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-300 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 
                            1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 
                            1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>

                    <!-- Tiktok -->
                    <a href="https://tiktok.com/@zz_z080" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-300 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                        <svg role="img" width="24" height="24" class=" fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 
                            2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=100084825065556" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-400 text-slate-300 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" fill-current" viewBox="0 0 24 24">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 
                            1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                    </a>

                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@ZahraniPutri-08" target=" blank" class=" w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:border-slate-400 hover:bg-slate-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class=" fill-current" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 
                            11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                   </div>
            </div>
            <p class=" font-medium text-xs text-slate-500 text-center">Dibuat dengan <span class=" text-pink-500">❤</span> oleh <a href="https://www.instagram.com/zhrxyie?igsh=MTFtN3VlMHRqM2FkOA==" target="_blank" class=" font-bold text-teal-400"> Zahrani Aulia Putri</a>, menggunakan <a href="https://tailwindcss.com" target="_blank" class=" font-bold text-sky-500">Tailwind CSS</a>.
            </p>
        </div>
     </footer>
     <!-- Footer End -->

</body>
</html>

<script src="/home"></script>
    
</body>
</html>