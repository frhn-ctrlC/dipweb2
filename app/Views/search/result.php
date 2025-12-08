<?= $this->extend('Layout/header'); ?>
<?= $this->section('content'); ?>
<body>
<link rel="stylesheet" href="<?= base_url('css/result.css') ?>">
<h2>Hasil pencarian: "<?= esc($keyword) ?>"</h2>

<hr>

<h3>Kamera</h3>
<div class="camera-list">
    <?php if (empty($kamera)) : ?>
        <p>Tidak ditemukan.</p>
    <?php else : ?>
        <?php foreach ($kamera as $cam) : ?>
            <div class="card">
                <img src="/uploads/<?= esc($cam['sampul_cam']) ?>" width="150">
                <h4><?= esc($cam['nama_cam']) ?></h4>
                <p>📍 <?= esc($cam['lok_cam']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<hr>

<h3>Lighting</h3>
<div class="lighting-list">
    <?php if (empty($lighting)) : ?>
        <p>Tidak ditemukan.</p>
    <?php else : ?>
        <?php foreach ($lighting as $lig) : ?>
            <div class="card">
                <img src="/uploads/<?= esc($lig['sampul_lig']) ?>" width="150">
                <h4><?= esc($lig['nama_lig']) ?></h4>
                <p>📍 <?= esc($lig['lok_lig']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<hr>

<h3>Modifier</h3>
<div class="modifier-list">
    <?php if (empty($modifier)) : ?>
        <p>Tidak ditemukan.</p>
    <?php else : ?>
        <?php foreach ($modifier as $mod) : ?>
            <div class="card">
                <img src="/uploads/<?= esc($mod['sampul_mod']) ?>" width="150">
                <h4><?= esc($mod['nama_mod']) ?></h4>
                <p>📍 <?= esc($mod['lok_mod']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?= $this->include('Layout/footer'); ?>
<?= $this->endSection(); ?>
