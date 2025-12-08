<?= $this->extend('Layout/header'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/css/kategori.css">

<section class="camera-page">

    <div class="breadcrumb">
        <p>Home / Lighting</p>
    </div>

    <div class="title">
        <h1>Buat Karyamu Menjadi Lebih Hidup!</h1>
        <p>CIPTAKAN KARYA HEBAT MULAI DARI SINI</p>
    </div>

    <div class="category-btn">
        <button class="active">Studio Flash</button>
        <button>Continuous LED Light</button>
        <button>Speedlight</button>
    </div>
    
<!-- <div class="category-btn">

    <a href="/kategori/kat_lighting/studio-flash">
        <button class="<?= ($slug == 'studio-flash') ? 'active' : '' ?>">Studio Flash</button>
    </a>

    <a href="/kategori/kat_lighting/continuous">
        <button class="<?= ($slug == 'continuous') ? 'active' : '' ?>">Continuous Light</button>
    </a>

    <a href="/kategori/kat_lighting/rgb-light">
        <button class="<?= ($slug == 'rgb-light') ? 'active' : '' ?>">RGB Light</button>
    </a>

</div> -->

<div class="category-btn">
    <a href="/kategori/kat_lighting/studio-flash">
        <button class="<?= ($slug == 'studio-flash') ? 'active' : '' ?>">Studio Flash</button>
    </a>

    <a href="/kategori/kat_lighting/continuous">
        <button class="<?= ($slug == 'continuous') ? 'active' : '' ?>">Continuous Light</button>
    </a>

    <a href="/kategori/kat_lighting/LED-Light">
        <button class="<?= ($slug == 'LED-Light') ? 'active' : '' ?>">LED Light</button>
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
    <?php foreach ($lighting as $lig) : ?>
        <div class="card">
            <img src="/uploads/<?= $lig['sampul_lig']; ?>" alt="<?= $lig['nama_lig']; ?>">
            <h3><?= $lig['nama_lig']; ?></h3>
            <p>📍<?= $lig['lok_lig']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

    


</section>

<?= $this->include('Layout/footer'); ?>
<?= $this->endSection(); ?>
