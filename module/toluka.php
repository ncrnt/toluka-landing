<section
        class="mx-auto py-28 flex flex-col lg:flex-row items-center justify-evenly bg-gradient-to-b from-[#ffb53e] to-[#e38f06] rounded-b-[2rem] w-full space-y-8 lg:space-y-0 lg:space-x-10 p-5">
        <div class="w-3/4 lg:w-1/4 photo-container pointer-events-none px-5 pt-5 lg:p-0 lg:hidden inline"
            data-aos="fade" data-aos-duration="1000">
            <div class="photo-aura"></div>
            <img src="img/toluka.svg" alt="Logo Toluka"
                class="drop-shadow-lg photo min-w-full min-h-[200px] lg:min-h-[600px] bg-white rounded-full"
                data-aos="zoom-in" data-aos-duration="500" data-aos-delay="400">
        </div>
        <div class="w-full lg:w-1/4 text-center lg:text-left">
            <h2 class="text-2xl font-extrabold text-slate-700 mb-2" data-aos="flip-up" data-aos-duration="1000"
                data-aos-delay="800">Selamat Datang!</h2>
            <h1 class="text-4xl font-extrabold text-slate-50 mb-2" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="200">TOLUKA - Tohe, Tuluhu, Karawo</h1>
            <p class="text-lg text-slate-50 mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                Tohe Tuluhu Karawo adalah karya unik yang memadukan keterampilan tangan lokal dengan sentuhan modern.
            </p>
        </div>
        <div class="w-3/4 lg:w-1/4 photo-container pointer-events-none p-5 lg:p-5 lg:inline hidden" data-aos="fade"
            data-aos-duration="1000">
            <div class="photo-aura"></div>
            <img src="img/toluka.svg" alt="Logo Toluka" class="drop-shadow-lg photo w-5/6 bg-white rounded-full"
                data-aos="zoom-in" data-aos-duration="500" data-aos-delay="400">
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="mx-auto py-20 bg-white w-full text-center lg:text-left p-5 border-b-[1px]">
        <div class="max-w-screen-lg mx-auto flex flex-col lg:flex-row justify-evenly">
        <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM profil");
                        while ($data=mysqli_fetch_array($query)) {
                            ?>
            <div class="gambar px-10 lg:p-0 lg:w-1/4 flex justify-center" data-aos="fade" data-aos-duration="1000">
                <div class="gambar">
                    <img src="admin/upload/<?php echo $data['foto']; ?>" alt="gambar" class="rounded-lg m-auto">
                </div>
            </div>
            <div class="w-full lg:w-2/4 my-auto mt-8 lg:mt-0" data-aos="fade" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-slate-800 mb-5"><?php echo $data['nama_profil']; ?></h2>
                
                <p class="text-lg text-slate-700 leading-relaxed">
                    <?php echo $data['deskripsi']; ?>
                </p>
                
            </div>
        </div>
        <?php } ?>
    </section>

    <!-- Apa itu Karawo Sections -->
    <section id="apa" class="mx-auto py-20 bg-white w-full text-center lg:text-left p-5 border-b-[1px]">
        <div class="max-w-screen-lg mx-auto flex flex-col lg:flex-row justify-evenly"> 
            <div class="gambar px-10 lg:p-0 lg:w-1/4 flex justify-center mt-2 lg:hidden" data-aos="fade" data-aos-duration="1000">
                <div class="gambar">
                    <img src="./img/motif.png" alt="gambar" class="rounded-lg m-auto">
                </div>
            </div>
            <div class="w-full lg:w-2/4 my-auto mt-8 lg:mt-0" data-aos="fade" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-slate-800 mb-5">Apa itu karawo?</h2>
                <p class="text-lg text-slate-700 leading-relaxed">
                    Karawo adalah kain tradisional khas Gorontalo. Karawo itu sendiri berasal dari Bahasa Gorontalo yang artinya sulaman dengan tangan Jadi Karawo adalah hasil kerajinan tangan. Orang-orang di luar Gorontalo mengenalnya dengan sebutan Kerawang
                </p>
            </div>
            <div class="gambar px-10 lg:p-0 lg:w-1/4 flex justify-center mt-2 hidden lg:inline" data-aos="fade" data-aos-duration="1000">
                <div class="gambar">
                    <img src="./img/motif.png" alt="gambar" class="rounded-lg m-auto">
                </div>
            </div>
        </div>
    </section>
    <!-- Apa itu Karawo Sections End -->

    <!-- Product Section -->
    <section id="produk" class="mx-auto py-20 w-full border-b-[1px] p-5">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-3xl font-bold text-slate-800 mb-5 text-center" data-aos="fade" data-aos-duration="1000">Produk Toluka</h2>
            <div class="flex flex-wrap justify-center gap-4 lg:gap-8">
            <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM produk");
                    while ($data=mysqli_fetch_array($query)) {
             ?>
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex max-w-sm w-full" data-aos="fade" data-aos-duration="1000">
                    <img src="admin/upload/<?php echo $data['foto']; ?>" alt="Produk 1" class="w-1/2 object-cover">
                    <div class="p-4 w-2/2">
                        <h3 class="text-xl font-bold mb-2"><?php echo $data['nama_produk']; ?></h3>
                        <p class="text-gray-700"><?php echo $data['deskripsi']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <!-- Events Section -->
    <section id="event" class="mx-auto py-20 w-full text-center border-b-[1px] p-5" data-aos="fade" data-aos-duration="1000">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-3xl font-bold text-slate-800 mb-5">Event</h2>
            <p class="text-lg text-slate-800 leading-relaxed mb-8">
                Jelajahi beragam event kami yang memperkenalkan produk unggulan dan kekayaan budaya lokal yang istimewa
            </p>
    
            <!-- Article Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM event");
                    while ($data=mysqli_fetch_array($query)) {
             ?>
                <!-- Article Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="admin/upload/<?php echo $data['foto']; ?>" alt="Artikel 1" class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2"><?php echo $data['nama_event']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $data['deskripsi'];?></p>
                        <a href="index.php?module=detail_event&kd_event=<?php echo$data['id_event']; ?>" class="bg-[#ffb53e] hover:bg-[#e4a642] py-2 px-4 rounded-full text-white">Lihat</a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>

       <!-- Galeri Section -->
       <section id="galeri" class="mx-auto py-20 w-full text-center border-b-[1px] p-5" data-aos="fade" data-aos-duration="1000">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-3xl font-bold text-slate-800 mb-5">Galeri</h2> 
            <p class="text-lg text-slate-800 leading-relaxed mb-8">
                Jelajahi proses pembuatan produk kami dengan berbagai macam aneka ragam
            </p>   
            <!-- Article Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Article Card 1 -->
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM galeri");
                    while ($data=mysqli_fetch_array($query)) {
             ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="admin/upload/<?php echo $data['gambar'];?>" alt="Artikel 1" class="w-full object-cover">
                    <div class="p-4">
                        <p class="text-gray-700 mb-4"><?= $data['nama_galeri'];?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    

    <!-- Our Team Section -->
    <section id="our-team" class="mx-auto py-20 bg-white w-full text-center border-b-[1px] p-5">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-3xl font-bold text-slate-800 mb-5" data-aos="fade" data-aos-duration="1000">Tim Kami</h2>
            <div class="flex flex-wrap justify-center -mx-1">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full sm:w-1/2 md:w-1/5 mx-1 mb-4" data-aos="fade" data-aos-duration="1000">
                    <img src="img/team/1.jpg" alt="Tim 1" class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Pembimbing</h3>
                        <p class="text-gray-700 p-1">Eka Vickraien Dangkua M.Kom</p>
                        <div class="flex justify-center space-x-4 mt-2">
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full sm:w-1/2 md:w-1/5 mx-1 mb-4" data-aos="fade" data-aos-duration="1000">
                    <img src="img/team/2.jpg" alt="Tim 2" class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Ketua Tim</h3>
                        <p class="text-gray-700 p-1">Yusuf Caesararyo S Ibrahim.</p>
                        <div class="flex justify-center space-x-4 mt-2">
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full sm:w-1/2 md:w-1/5 mx-1 mb-4" data-aos="fade" data-aos-duration="1000">
                    <img src="img/team/artika.png" alt="Tim 3" class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Anggota Tim 1</h3>
                        <p class="text-gray-700 p-1">Artika D. Pasambuna</p>
                        <div class="flex justify-center space-x-4 mt-2">
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full sm:w-1/2 md:w-1/5 mx-1 mb-4" data-aos="fade" data-aos-duration="1000">
                    <img src="img/team/3.jpg" alt="Tim 4" class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Anggota Tim 2</h3>
                        <p class="text-gray-700 p-1">Zulkarnain Huntu</p>
                        <div class="flex justify-center space-x-4 mt-2">
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full sm:w-1/2 md:w-1/5 mx-1 mb-4" data-aos="fade" data-aos-duration="1000">
                    <img src="img/team/4.jpg" alt="Tim 5" class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Anggota Tim 3</h3>
                        <p class="text-gray-700 p-1">Regita Cahyani Majid</p>
                        <div class="flex justify-center space-x-4 mt-2">
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full sm:w-1/2 md:w-1/5 mx-1 mb-4" data-aos="fade" data-aos-duration="1000">
                    <img src="img/team/5.jpg" alt="Tim 5" class="w-full object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Anggota Tim 4</h3>
                        <p class="text-gray-700 p-1">Muhammad Agung Gawa</p>
                        <div class="flex justify-center space-x-4 mt-2">
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="our-contact" class="mx-auto py-20 bg-[#ffb53e] w-full text-center">
        <div class="max-w-screen-lg mx-auto" data-aos="fade" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-slate-800 mb-5">Kontak Kami</h2>
            <p class="text-lg text-slate-800 leading-relaxed">
                Hubungi kami untuk informasi lebih lanjut mengenai produk dan event kami.
            </p>
            <div class="flex justify-center space-x-6 mt-8">
                <a href="https://www.facebook.com/profile.php?id=61557032645662" class="hover:text-gray-200 text-slate-800 text-3xl">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/_toluka" target="_blank"
                    class="hover:text-gray-200 text-slate-800 text-3xl">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/628" target="_blank" class="hover:text-gray-200 text-slate-800 text-3xl">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </section>