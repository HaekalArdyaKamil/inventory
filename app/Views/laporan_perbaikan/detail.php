<?= $this->extend('layout/template-1'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h2 class="mt-3">Detail User</h2>
            <div class="card">
                <div class="text-center">
                    <img src="<?= base_url('img/' . $user->foto) ?>" class="card-img-top rounded-circle " style="height: 150px; width: 150px;" alt="avatar">
                </div>
                <div class="card-body">
                    
                    <h5 class="card-title"><?= $user->nama; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">@<?= $user->username; ?></h6>
                    <p class="card-text">Level: <?= $user->level; ?></p>
                    
                    <a href="/user" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

