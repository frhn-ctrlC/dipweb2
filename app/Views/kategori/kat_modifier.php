<?= $this->extend('Layout/header'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="/css/kategori.css">

<section class="camera-page">

    <div class="breadcrumb">
        <p>Home / Modifier</p>
    </div>

    <div class="title">
        <h1>Buat Karyamu Menjadi Lebih Hidup!</h1>
        <p>CIPTAKAN KARYA HEBAT MULAI DARI SINI</p>
    </div>

    <div class="category-btn">
    
    <a href="/kategori/kat_modifier/Softbox">
        <button class="<?= (isset($kategori) && $kategori == 'Softbox') ? 'active' : '' ?>">Softbox</button>
    </a>

    <a href="/kategori/kat_modifier/Umbrella">
        <button class="<?= (isset($kategori) && $kategori == 'Umbrella') ? 'active' : '' ?>">Umbrella</button>
    </a>

    <a href="/kategori/kat_modifier/Reflector">
        <button class="<?= (isset($kategori) && $kategori == 'Reflector') ? 'active' : '' ?>">Reflector</button>
    </a>

    <a href="/kategori/kat_modifier/Ringflash">
        <button class="<?= (isset($kategori) && $kategori == 'Ringflash') ? 'active' : '' ?>">Ringflash</button>
    </a>

    <a href="/kategori/kat_modifier/Snoot">
        <button class="<?= (isset($kategori) && $kategori == 'Snoot ') ? 'active' : '' ?>">Snoot</button>
    </a>
    </div>


    <div class="camera-list">
    <?php foreach ($modifier as $k) : ?>
        <div class="card">
            <img src="/uploads/<?= $k['sampul_mod']; ?>" alt="<?= $k['nama_mod']; ?>">
            <h3><?= $k['nama_mod']; ?></h3>
            <p>📍<?= $k['lok_mod']; ?></p>
        </div>
    <?php endforeach; ?>
    </div>

</section>

<?= $this->include('Layout/footer'); ?>
<?= $this->endSection(); ?>
