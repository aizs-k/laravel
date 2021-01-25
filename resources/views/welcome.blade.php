<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    </head>
    <body>
    <section class="w-screen mx-auto px-4">
        <nav class="flex flex-wrap p-6 justify-between">
			<!-- Logo -->
            <div class="flex flex-shrink-0 mr-6"> 
                <img src="img/1.png" class="h-10 w-50 mr-2">
            </div>
			
			<!-- Menu -->
            <div class="block lg:hidden">
                <a class="flex items-center px-3 py-2 rounded border border-indigo-400 text-indigo-500 hover:text-indigo-700 hover:border-indigo-700">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </a>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="#about" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-4">
                        About me
                    </a>
                    <a href="#skill" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-4">
                        Skill Framework
                    </a>
                    <a href="#recent" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-4">
                        Recent Work
                    </a>
                
                    <a href="#contact" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-4">
                        Contact me
                    </a>
                </div>
                <div>
                    <a href="#contact" class="inline-block text-sm px-4 py-2 rounded text-gray-600 border border-gray-600 hover:border-transpaent hover:text-white hover:bg-indigo-700 mt-4 lg:mt-0">
                        Contact me
                    </a>
                </div>
            </div>
        </nav>
    </section>
	<!-- end navbar -->
	
    <!-- section about -->
    <section id="about" class="w-screen mx-auto py-4 gradient">
		<!-- sambutan -->
        <div class="px-16 py-8 text-center text-white">
            <h1 class="w-full text-5xl font-bold ">About me</h1>
            <div class="mb-4">
                <div class="bg-pink-500 w-2/3 md:w-1/6 opacity-75 rounded h-1 mx-auto"></div>
            </div>
            <h2 class="text-3xl font-bold mb-2 ">
                Hai, Saya Naufal. Senang berjumpa dengan Anda.
            </h2>
            <h3 class="text-lg mb-2">
                Saya seorang programmer dan juga analis, selain dapat membuat aplikasi menggunakan bahasa pemrograman, Saya juga bisa merancang suatu
                sistem yang dibutuhkan user.
            </h3>
            <div class="w-full">
                <div class="px-4 py-4 ">
					<!-- source image baby.jpg didownload dari situs unsplash.com, koleksi Troy T - @ttcollect -->
                    <img src="../img/1.png" class="shadow-lg rounded-full max-w-full mx-auto text-center w-48"> 
                </div>
            </div>
        </div>
		<!-- box portofolio -->
        <div class="grid grid-cols-1 md:grid-cols-3 bg-white py-4 px-4 md:py-8 md:px-8 m-16 rounded-lg">
			<!-- box pertama -->
            <div class="max-w-sm shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fas fa-laptop-code text-blue-500 fa-5x mb-6"></i>
                <div class="p-4 ">
                    <p class="font-bold text-lg md:text-xl mb-6">Programming</p>
                    <p class="text-gray-600 text-base mb-2">PHP</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">.NET</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">C++</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Java</p>
                    <hr class="text-gray-600 mb-2">    
                </div>
                <div class="px-2 py-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tl-lg rounded-br-lg">Lihat Portofolio</button>
                </div>
            </div>
			
			<!-- box kedua -->
            <div class="max-w-sm shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fas fa-pencil-ruler text-red-500 fa-5x mb-6"></i>
                <div class="p-4 ">
                    <p class="font-bold text-lg md:text-xl mb-6">Design</p>
                    <p class="text-gray-600 text-base mb-2">CSS</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Logo</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Mobile</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">UI</p>
                    <hr class="text-gray-600 mb-2">    
                </div>
                <div class="px-2 py-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tl-lg rounded-br-lg">Lihat Portofolio</button>
                </div>
            </div>
			
			<!-- box ketiga -->
            <div class="max-w-sm shadow-lg px-4 py-4 bg-white m-3 text-center">
                <i class="fas fa-database text-green-500 fa-5x mb-6"></i>
                <div class="p-4 ">
                    <p class="font-bold text-lg md:text-xl mb-6">Database</p>
                    <p class="text-gray-600 text-base mb-2">MySQL</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">SQL Server</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">Oracle</p>
                    <hr class="text-gray-600 mb-2">
                    <p class="text-gray-600 text-base mb-2">PostgreSQL</p>
                    <hr class="text-gray-600 mb-2">
                </div>
                <div class="px-2 py-4">
                    <button class="bg-blue-500 hover:bg-blue-700  text-white font-bold px-4 py-2 shadow-md rounded-tl-lg rounded-br-lg">Lihat Portofolio</button>
                </div>
            </div>
            
        </div>
    </section>
	<!-- end about me -->
	
    <!-- section skill framework -->
    <section id="skill" class="container mx-auto py-4 bg-white px-4">
        <div class="flex flex-wrap">
			<!-- box pertama menampilkan gambar -->
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4 mt-20">
				<!-- source img4.jpg didownload dari situs unsplash.com, Jess Bailey - @jessbailey-->
				<img src="img/img4.jpg" class="max-w-full rounded-lg shadow-lg">
            </div>
			
			<!-- box kedua menampilkan skill framework -->
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    <h1 class="w-full my-2 text-5xl font-bold text-center text-gray-700">Skill Framework</h1>
                    <div class="mb-4">
                        <div class="h-1 mx-auto bg-pink-500  w-2/3  opacity-75 my-0 rounded"></div>
                    </div>
                    <p class="mt-4 text-lg text-gray-600">Berikut adalah item dan skala keahlian untuk framework :</p>
                    <ul class="list-none mt-4">
                        <li class="grid grid-cols-2 py-2">
                            <p class="text-lg text-gray-600">Codeigniter</p>
                            <div class="gradient-skill w-7/8"></div>
                        </li>
                        <li class="grid grid-cols-2 py-2">
                            <p class="text-lg text-gray-600">Laravel</p>
                            <div class="gradient-skill w-3/4"></div>
                        </li>
                        <li class="grid grid-cols-2 py-2">
                            <p class="text-lg text-gray-600">Bootstrap</p>
                            <div class="gradient-skill w-2/3"></div>
                        </li>
                        <li class="grid grid-cols-2 py-2">
                            <p class="text-lg text-gray-600">Tailwindcss</p>
                            <div class="gradient-skill w-1/2"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<!-- end skill framework -->
	
	<!-- section my recent work -->
    <section id="recent" class="w-screen mx-auto py-8 bg-white">
        <div class="text-center mb-8">
            <h1 class="w-full my-2 text-5xl font-bold text-gray-700">My Recent Work</h1>
            <div class="mb-4">
                <div class="h-1 mx-auto bg-pink-500  w-2/3 md:w-1/4 opacity-75 my-0 py-0 rounded"></div>
            </div>
            <p class="text-lg m-4 text-gray-600">Berikut adalah pekerjaan terbaru Saya : </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 m-8">
            <div class="bg-white px-4 py-4 m-2 shadow-lg rounded">
				<!-- source img1.jpg didownload dari situs unsplash.com, koleksi Clément H - @clemhlrdt-->
                <img src="img/img1.jpg" class="w-full rounded-lg">
                <div class="px-2 py-2 text-center">
                    <p class="font-bold text-xl mb-2 text-gray-700">Sistem Informasi Penelitian</p>
                    <p class="text-gray-700 text-base">Sistem Informasi penelitian untuk dosen dan mahasiswa di Universitas XX</p>
                </div>
                <div class="px-2 py-4 text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tr-lg rounded-bl-lg">Detail</button>
                </div>
            </div>
            <div class="bg-white px-4 py-4 m-2 shadow-lg rounded">
				<!-- source img2.jpg didownload dari situs unsplash.com, koleksi NordWood Themes - @nordwood -->
                <img src="https://www.instagram.com/p/CJ-WULMBvJD/?utm_source=ig_web_copy_link" class="w-full rounded-lg">
                <div class="px-2 py-2 text-center">
                    <p class="font-bold text-xl mb-2 text-gray-700">Sistem Informasi Perpustakaan</p>
                    <p class="text-gray-700 text-base">Sistem Informasi Perpustakaan untuk Perpustakaan kota ABC</p>
                </div>
                <div class="px-2 py-4 text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tr-lg rounded-bl-lg">Detail</button>
                </div>
            </div>
			<!-- source img4.jpg didownload dari situs unsplash.com, Jess Bailey - @jessbailey-->
            <div class="bg-white px-4 py-4 m-2 shadow-lg rounded">
                <img src="img/img4.jpg" class="w-full rounded-lg">
                <div class="px-2 py-2 text-center">
                    <p class="font-bold text-xl mb-2 text-gray-700">Sistem Informasi Keuangan</p>
                    <p class="text-gray-700 text-base">Sistem Informasi Keuangan untuk perusahaan ABC</p>
                </div>
                <div class="px-2 py-4 text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tr-lg rounded-bl-lg">Detail</button>
                </div>
            </div>
            <div class="bg-white px-4 py-4 m-2 shadow-lg rounded">
				<!-- source img1.jpg didownload dari situs unsplash.com, koleksi Clément H - - @clemhlrdt -->
                <img src="https://instagram.fsoc1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/139573220_3734963479904414_6561075562316320307_n.jpg?_nc_ht=instagram.fsoc1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=PvJmcsGo7RIAX91krpZ&tp=1&oh=6ce9caf3dd259dace8d818abb949cc8a&oe=60305D2A" class="w-full rounded-lg">
                <div class="px-2 py-2 text-center">
                    <p class="font-bold text-xl mb-2 text-gray-700">Sistem Informasi Asset</p>
                    <p class="text-gray-700 text-base">Sistem Informasi Asset untuk Laboratorium ABC</p>
                </div>
                <div class="px-2 py-4 text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 shadow-md rounded-tr-lg rounded-bl-lg">Detail</button>
                </div>
            </div>
        </div>
    </section>
	<!-- end my recent work -->
	
	<!-- section contact -->
    <section id="contact" class="w-screen mx-auto py-4 gradient-bottom">
        <h1 class="w-full my-2 text-5xl font-bold text-center text-white">Contact me</h1>
        <div class="mb-4">
            <div class="h-1 mx-auto bg-pink-500  w-2/3 md:w-1/6 opacity-75 my-0 py-0 rounded"></div>
        </div>
        <div class="container p-4 mb-6 w-full lg:w-1/2 shadow-lg rounded-lg bg-gray-200 mx-auto">
			<form class="p-5 lg:p-10 text-center">
				<h4 class="text-2xl font-semibold">Ingin menghubungi saya?</h4>
				<p class="mt-1 mb-4 text-gray-600">Tolong kirimkan pesan.</p>
				<div class="w-full mb-4 mt-8">
					<label class="uppercase text-gray-600 text-xs font-bold">Nama lengkap</label>
					<input type="text" class="mt-2 px-3 py-3 placeholder-gray-500 text-gray-600 bg-white rounded text-sm shadow w-full" placeholder="Nama Lengkap">
				</div>

				<div class="w-full mb-4 mt-4">
					<label class="uppercase text-gray-600 text-xs font-bold">Email</label>
					<input type="text" class="mt-2 px-3 py-3 placeholder-gray-500 text-gray-600 bg-white rounded text-sm shadow w-full" placeholder="Email">
				</div>

				<div class="w-full mb-4 mt-4">
					<label class="uppercase text-gray-600 text-xs font-bold">Pesan</label>
					<textarea rows="4" cols="80" class="mt-2 px-3 py-3 placeholder-gray-500 text-gray-600 bg-white rounded text-sm shadow w-full" placeholder="Tuliskan pesan ..."></textarea>
				</div>
				<div class="mt-6">
					<button class="bg-indigo-700 text-white text-sm font-bold uppercase px-6 py-3 rounded shadow hover:bg-indigo-900 hover:shadow-lg" type="button">Kirim pesan</button>
				</div>
			</form>
        </div>
    </section>
	<!-- end section contact me -->
	
	<!-- section footer -->
    <section class="w-screen mx-auto py-4 bg-white mt-8 mb-8">
		  <div class="text-center">
			 <a href="#" class="text-indigo-700 hover:text-indigo-900 p-2 ">
				<i class="fa-2x fab fa-facebook"></i>
			 </a>
			 <a href="#" class="text-indigo-700 hover:text-indigo-900 p-2 ">
				<i class="fa-2x fab fa-twitter"></i>
			 </a>
			 <a href="#" class="text-indigo-700 hover:text-indigo-900 p-2 ">
			   <i class="fa-2x fab fa-instagram"></i>
			 </a>
		 </div>
		 <div class="text-center mt-4 text-gray-600">
		   Design with Tailwindcss
		 </div>
    </section>
	<!-- end footer -->

        
    </body>
</html>
