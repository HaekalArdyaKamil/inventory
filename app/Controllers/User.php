<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $dbuser;
    public function __construct()
    {
        $this->dbuser = new UserModel();
    }
    public function index()
    {
        $data = [
            'user' => $this->dbuser->findAll()
        ];
        return view('user', $data);
    }
}
