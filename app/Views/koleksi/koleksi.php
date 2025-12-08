<?= $this->extend('Layout/header'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/css/koleksi.css">

<section class="koleksi-page">

    <div class="breadcrumb">
        <p>Home / Collection</p>
    </div>

    <h1 class="page-title">Koleksi Favorit</h1>

    <div class="fav-list">
        <?php for ($i = 1; $i <= 7; $i++) : ?>
        <div class="fav-card">
            <img src="/img/cam.png" alt="Camera" class="item-img">
            <h3 class="item-title">Fujifilm X100V Digital Camera</h3>
            <p class="location">📍 Cilacap</p>
            <span class="bookmark">
                <img src="/img/save.png" alt="save">
            </span>
        </div>
        <?php endfor ?>
    </div>

</section>

<?= $this->include('Layout/footer'); ?>
<?= $this->endSection(); ?>
