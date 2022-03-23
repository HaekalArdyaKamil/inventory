<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar User</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Username</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($user as $u) : ?>
                            <tr class="text-center">
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $u['nama']; ?></td>
                                <td><img src="<?= base_url('img/' . $u['foto']) ?>" class="card-img-top gmbr-p" style="width: 50px"></td>
                                <td><?= $u['username']; ?></td>
                                <td>
                                    <a href="/user/edit/<?= $u['id_user']; ?>" class="btn btn-warning">Edit</a>
                                    
                                    <a href="/user/<?= $u['id_user']; ?>" class="btn btn-info">Detail</a>

                                    <form action="/user/delete/<?= $u['id_user']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Di Hapus?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>