<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class Dashboard extends BaseController
{
    protected $dbbarang;
    public function __construct()
    {
        $this->dbbarang = new BarangModel();
    }
    public function index()
    {
        $data = [
            'barang' => $this->dbbarang->findAll()
        ];
        return view('barang', $data);
    }
    public function save()
    {
        $nama = $this->request->getPost('nama');
        $spesifikasi = $this->request->getPost('spesifikasi');
        $lokasi = $this->request->getPost('lokasi');
        $kondisi = $this->request->getPost('kondisi');
        $jumlah = $this->request->getPost('jumlah');
        $sumber = $this->request->getPost('sumber');
        $query = $this->dbbarang->query('SELECT newkodebarang()');
        $id = $query->getResult()[0]->{'newkodebarang()'};
        $this->dbbarang->save([
            'id_barang' => $id,
            'nama_barang' => $nama,
            'spesifikasi' => $spesifikasi,
            'lokasi' => $lokasi,
            'kondisi' => $kondisi,
            'jumlah_barang' => $jumlah,
            'sumber_dana' => $sumber
        ]);
        return redirect()->to('barang');
    }
    public function ubah()
    {
        $nama = $this->request->getPost('nama');
        $spesifikasi = $this->request->getPost('spesifikasi');
        $lokasi = $this->request->getPost('lokasi');
        $kondisi = $this->request->getPost('kondisi');
        $jumlah = $this->request->getPost('jumlah');
        $sumber = $this->request->getPost('sumber');
        $id = $this->request->getPost('id_barang');
        $this->dbbarang->save([
            'id_barang' => $id,
            'nama_barang' => $nama,
            'spesifikasi' => $spesifikasi,
            'lokasi' => $lokasi,
            'kondisi' => $kondisi,
            'jumlah_barang' => $jumlah,
            'sumber_dana' => $sumber
        ]);
        return redirect()->to('barang');
    }
    public function getubah()
    {
        echo json_encode($this->dbbarang->find($_POST['id']));
    }
    public function delete($id)
    {
        $this->dbbarang->query('START TRANSACTION;');
        $this->dbbarang->query("DELETE FROM stok WHERE id_barang=" . $id . ";");
        $this->dbbarang->query("DELETE FROM barang WHERE id_barang=" . $id . ";");
        $this->dbbarang->query('COMMIT;');
        return redirect()->to('barang');
    }
}
