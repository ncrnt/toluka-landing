<?php 
$kd = $_GET['kd_event'];
$query = mysqli_query($koneksi,"SELECT * FROM event WHERE id_event='$kd'");
while ($data=mysqli_fetch_array($query)) {
?>

<section class="mx-auto py-20 px-5 max-w-screen-lg" data-aos="fade" data-aos-duration="1000">
        <h1 id="article-title" class="text-3xl font-bold text-slate-800 mb-5"><?php echo $data['nama_event']; ?></h1>
        <img id="article-image" src="admin/upload/<?php echo $data['foto']; ?>" alt="Artikel" class="w-full mb-5 rounded-lg">
        <p id="article-description" class="text-lg text-slate-700 leading-relaxed">
        <?php echo $data['deskripsi']; ?>.
        </p>
    </section>
<?php }?>

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