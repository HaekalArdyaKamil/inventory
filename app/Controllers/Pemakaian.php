<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemakaianModel;

class pemakaian extends BaseController
{
    protected $dbpemakaian;
    public function __construct()
    {
        $this->dbpemakaian = new PemakaianModel();
    }
    public function index()
    {
        $data = [
            'lp_pemakaian' => $this->dbpemakaian->findAll()
        ];
        return view('/pemakaian', $data);
    }
}
