<?= $this->extend('Layout/header'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/css/kategori.css">

<section class="camera-page">

    <div class="breadcrumb">
        <p>Home / Camera</p>
    </div>

    <div class="title">
        <h1>Buat Karyamu Menjadi Lebih Hidup!</h1>
        <p>CIPTAKAN KARYA HEBAT MULAI DARI SINI</p>
    </div>

    <!-- <div class="category-btn">
        <button class="active">DSLR</button>
        <button>Mirrorless</button>
        <button>Analog</button>
        <button>Action Cam</button>
        <button>Point n Shoot</button>
    </div> -->
    <div class="category-btn">
    <a href="/kategori/kat_kamera/DSLR">
        <button class="<?= ($kategori == 'DSLR') ? 'active' : '' ?>">DSLR</button>
    </a>

    <a href="/kategori/kat_kamera/Mirrorless">
        <button class="<?= ($kategori == 'Mirrorless') ? 'active' : '' ?>">Mirrorless</button>
    </a>

    <a href="/kategori/kat_kamera/Analog">
        <button class="<?= ($kategori == 'Analog') ? 'active' : '' ?>">Analog</button>
    </a>

    <a href="/kategori/kat_kamera/Action Cam">
        <button class="<?= ($kategori == 'Action Cam') ? 'active' : '' ?>">Action Cam</button>
    </a>

    <a href="/kategori/kat_kamera/Point n Shoot">
        <button class="<?= ($kategori == 'Point n Shoot') ? 'active' : '' ?>">Point n Shoot</button>
    </a>
    </div>



    <!-- <div class="camera-list">
        <?php for ($i = 1; $i <= 12; $i++) : ?>
            <div class="card">
                <img src="/img/cam.png" alt="Fujifilm Camera">
                <h3>Fujifilm X100V Digital Camera</h3>
                <p>📍Cilacap</p>
            </div>
        <?php endfor ?>
    </div> -->

    <div class="camera-list">
    <?php foreach ($kamera as $k) : ?>
        <div class="card">
            <img src="/uploads/<?= $k['sampul_cam']; ?>" alt="<?= $k['nama_cam']; ?>">
            <h3><?= $k['nama_cam']; ?></h3>
            <p>📍<?= $k['lok_cam']; ?></p>
        </div>
    <?php endforeach; ?>
    </div>


</section>

<?= $this->include('Layout/footer'); ?>
<?= $this->endSection(); ?>
