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