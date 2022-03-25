<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <section class="home-section">
        <div class="home-content">
        <i class='bx bx-menu' ></i>
        </div>
    <!-- //Navbar -->
        <div>
            <div style="display: inline; font-size:25px; margin:50px;">
                Supplier
                <small class="text-muted" style="font-size:15px">Data Supplier</small>
            </div>

            <div style="display: inline; float:right; margin-right:10px; font-size:20px;">
                <span class="material-icons-outlined">
                    dashboard
                </span>
                Home 
                <small class="text-muted" style="font-size:15px"> > Dashboard </small>
                
            </div>
        </div>

    <!-- Table -->
            <div class="container-fluid col-lg-10" style="width: 90%; margin-top: 20px;">        
            <div class="card padd">
                <div class="card-body">
                    <div class="couple">      
                        <a href="#" class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float:right;">
                            + Tambah
                        </a>
                        <form class="d-flex w-25">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search"
                                autocomplete="off">
                            <button class="btn btn-success  btn-xs" type="submit">Search</button>
                        </form>
                    </div>

                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama Supplier</th>
                                <th>Alamat</th>
                                <th class="min-width-15">Telepon</th>
                                <th class="min-width-10">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($supplier as $spr) : ?>
                            <tr >
                                <td align="center"><?= $i++; ?></td>
                                <td><?= $spr['nama_supplier']; ?></td>
                                <td><?= $spr['alamat_supplier']; ?></td>
                                <td><?= $spr['telp_supplier']; ?></td>
                                <td align="center">                                    
                                    <a href="#" class="btn btn-warning btn-xs" type="submit" data-id="<?= $spr['id_supplier']; ?>">
                                        <img src="/img/edit.png" alt="edit" style="height: 20px;">
                                    </a>
                                    <a href="#" class="btn btn-primary btn-xs" type="submit" data-id="<?= $spr['id_supplier']; ?>">
                                        <img src="/img/detail.png" alt="edit" style="height: 20px;">
                                    </a>
                                    <a href="<?= base_url('supplier/delete/' . $spr['id_supplier']) ?>" class="btn btn-danger btn-xs" type="submit" data-id="<?= $spr['id_supplier']; ?>">
                                        <img src="/img/delete.png" alt="edit" style="height: 20px;">
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
    </section>
<?= $this->endSection(); ?>