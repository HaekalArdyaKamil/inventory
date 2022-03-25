<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section class="home-section">
        <div class="home-content">
        <i class='bx bx-menu' ></i>
        </div>

        <h2 style="margin: top 20%;;">Supplier</h2>
            <div class="container-fluid col-lg-10" style="width: 90%; margin-top: 20px;">        
                <div class="card padd">
                <div class="card-body">
                    <div class="couple">                        
                        <a class="btn btn-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="material-icons">
                            add
                        </a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Supplier</th>
                                <th>Alamat</th>
                                <th class="min-width-15">Telp</th>
                                <th class="min-width-10">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($supplier as $spr) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $spr['nama_supplier']; ?></td>
                                <td><?= $spr['alamat_supplier']; ?></td>
                                <td><?= $spr['telp_supplier']; ?></td>
                                <td>
                                    <a class="material-icons icon detail" data-id="<?= $spr['id_supplier']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        visibility
                                    </a>
                                    <a class="material-icons icon ubah" data-id="<?= $spr['id_supplier']; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        edit
                                    </a>
                                    <a href="<?= base_url('supplier/delete/' . $spr['id_supplier']) ?>" class="material-icons icon">
                                        delete
                                    </a>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        
        <!-- modal detail -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-detail">
                    <div class="modal-header">
                        <h1 id="juduldModal" class="card-title">Detail Data Supplier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex">
                            <img class="ganti" style="width: 50%; height: 50%;" src="<?= base_url('img/no-image.png') ?>">

                            <div class="kanan">
                                <h4 class="detail" id="detail_nama"></h4>
                                <h4 class="detail" id="detail_spesifikasi"></h4>
                                <h4 class="detail" id="detail_lokasi"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal tambah dan edit -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 id="judulModal" class="card-title">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('supplier/save') ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_supplier" id="id_supplier">
                            <div class="row mb-3">
                                <label for="nama" class="col-form-label">Nama Supplier</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Supplier">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="spesifikasi" class="col-form-label">Alamat Supplier</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="spesifikasi" id="spesifikasi" placeholder="Alamat Supplier">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-form-label">Telp Supplier</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Telp Supplier">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-form-label">Foto</label>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto">
                                </div>
                            </div>
                            <div class="d-flex float-end">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>