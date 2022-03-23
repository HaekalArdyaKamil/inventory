<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    protected $dbsupplier;
    public function __construct()
    {
        $this->dbsupplier = new SupplierModel();
    }
    public function index()
    {
        $data = [
            'supplier' => $this->dbsupplier->findAll()
        ];
        return view('supplier', $data);
    }
    public function save()
    {
        $nama = $this->request->getPost('nama');
        $spesifikasi = $this->request->getPost('spesifikasi');
        $lokasi = $this->request->getPost('lokasi');
        $query = $this->dbsupplier->query('SELECT newkodesupplier()');
        $id = $query->getResult()[0]->{'newkodesupplier()'};
        $this->dbsupplier->save([
            'id_supplier' => $id,
            'nama_supplier' => $nama,
            'alamat_supplier' => $spesifikasi,
            'telp_supplier' => $lokasi,
        ]);
        return redirect()->to('supplier');
    }
    public function ubah()
    {
        $nama = $this->request->getPost('nama');
        $spesifikasi = $this->request->getPost('spesifikasi');
        $lokasi = $this->request->getPost('lokasi');
        $id = $this->request->getPost('id_supplier');
        $this->dbsupplier->save([
            'id_supplier' => $id,
            'nama_supplier' => $nama,
            'alamat_supplier' => $spesifikasi,
            'telp_supplier' => $lokasi,
        ]);
        return redirect()->to('supplier');
    }
    public function getubah()
    {
        echo json_encode($this->dbsupplier->find($_POST['id']));
    }
    public function delete($id)
    {
        $this->dbsupplier->delete($id);
        return redirect()->to('supplier');
    }
}
