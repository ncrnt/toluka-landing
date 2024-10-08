<?php 
session_start();

include "lib/koneksi.php";
include "lib/config.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toluka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image" href="./img/toluka.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="text-[#ffb53e] min-h-screen">
    <!-- Navbar -->
    <header class="shadow-2xl">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center py-2 px-2 lg:px-14 lg:py-3">
            <a href="#" class="flex justify-evenly">
                <img src="./img/toluka.svg" alt="" class="w-[60px] lg:w-[50px] mx-1 my-auto">
                <h2 class="font-bold text-2xl lg:text-3xl my-auto logo-text tracking-wider uppercase lg:inline hidden">
                    Toluka
                </h2>
            </a>
            <button id="navbar-toggle"
                class="inline-flex items-center p-2 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" view="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <nav id="navbar-default" class="hidden md:flex md:space-x-6">
                <a href="#" class="px-4 py-2 text-slate-700 rounded-lg transition hover:underline">Beranda</a>
                <a href="#about-us" class="px-4 py-2 text-slate-700 rounded-lg transition hover:underline">Tentang
                    Kami</a>
                <a href="#produk" class="px-4 py-2 text-slate-700 rounded-lg transition hover:underline">Produk
                    Toluka</a>
                <a href="#event" class="px-4 py-2 text-slate-700 rounded-lg transition hover:underline">Event</a>
                <a href="#our-team" class="px-4 py-2 text-slate-700 rounded-lg transition hover:underline">Tim Kami</a>
                <a href="#our-contact" class="px-4 py-2 text-slate-700 rounded-lg transition hover:underline">Kontak
                    Kami</a>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden" id="mobile-menu">
            <nav class="flex flex-col space-y-4 px-5 m-auto max-w-full mb-5 w-full">
                <a href="#" class="px-4 py-2 text-slate-700 rounded-lg transition hover:bg-gray-300">Beranda</a>
                <a href="#about-us" class="px-4 py-2 text-slate-700 rounded-lg transition hover:bg-gray-300">Tentang
                    Kami</a>
                <a href="#produk" class="px-4 py-2 text-slate-700 rounded-lg transition hover:bg-gray-300">Produk
                    Toluka</a>
                <a href="#event" class="px-4 py-2 text-slate-700 rounded-lg transition hover:bg-gray-300">Event</a>
                <a href="#our-team" class="px-4 py-2 text-slate-700 rounded-lg transition hover:bg-gray-300">Tim
                    Kami</a>
                <a href="#our-contact" class="px-4 py-2 text-slate-700 rounded-lg transition hover:bg-gray-300">Kontak
                    Kami</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <?php 
            if ($_GET['module']=='home') {
                include "module/toluka.php";
                
            }else if ($_GET['module']=='detail_event') {
                include "module/detail_event.php";
            }else{
                echo "<script>window.location='$base_url'+'index.php?module=home';</script>";
                include "module/toluka.php";
            }
         ?>

    <!-- Footer -->
    <footer class="text-center p-5 bg-slate-800 text-white">
        <p class="text-gray-400">© 2024 Toluka. All rights reserved.</p>
    </footer>

    <script>
        var navbarToggle = document.getElementById('navbar-toggle');
        var mobileMenu = document.getElementById('mobile-menu');

        navbarToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });

        AOS.init({
            once: true
        });
    </script>
</body>

</html>