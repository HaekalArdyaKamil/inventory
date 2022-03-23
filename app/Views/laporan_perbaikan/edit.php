<?= $this->extend('layout/template-1'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data User</h2>
            <form action="/user/update/<?= $user['id_user']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                <input type="hidden" name="fotolama" value="<?= $user['foto']; ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= $user['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10" id="user" name="user">
                        <select class="custom-select" name="level" value="<?= $user['level']; ?>">
                        <option value="U03" selected>Peminjam</option>
                            <option value="U01">Administrator</option>
                            <option value="U02">Manajemen</option>
                        </select>
                    </div>
                </div>
                <div class="form-grup row">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="password" class="hidden" id="password" name="password" value="<?= $user['password']; ?>">
                            <input type="file" class="custom-file-input" id="foto" name="foto" onchange="priviewImg()">
                            <label class="custom-file-label" for="foto"><?= $user['foto']; ?></label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                    <a href="/user" class="btn btn-primary float-right">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>