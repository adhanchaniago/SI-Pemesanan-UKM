<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<!-- untuk konten -->
<section class="konten">
    <div class="container">
        <h1>Berita UKM Desa Tritiro</h1>
        <div class="row" width="1000" height="1500">

            <?php $ambil = $koneksi->query("SELECT * FROM berita"); ?>
            <?php while ($perberita = $ambil->fetch_assoc()) { ?>
            <div class="col-md-40">
                <div class="thumbnail">
                    <div class="caption">
                        <h2><?php echo $perberita['judul']; ?></h2><br>
                        <h4><?php echo $perberita['tanggal']; ?></h4><br>
                        <h3><?php echo substr($perberita['isi'], 0, 100) ; ?>
                            <a href="berita_detail.php?id=<?php echo $perberita['id_berita']; ?>">...Read more</a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>