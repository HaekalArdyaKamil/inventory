<?php

namespace App\Models;

use CodeIgniter\Model;

class PemakaianModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lp_pemakaian';
    protected $primaryKey       = 'id_pemakaian';
    protected $useAutoIncrement = false;
    protected $insertID         = 1;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_pemakaian',
        'kode_barang', 
        'id_user', 
        'hari_tanggal',
        'waktu_awal',
        'kondisi_sebelum',
        'waktu_akhir',
        'kondisi_sesudah',
        'keterangan'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getId()
    {
        $sql = 'SELECT * FROM detail_pemakaian';

        return $this->query($sql)->getResultArray();
    }
}

