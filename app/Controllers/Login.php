<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $dblogin, $sesi;
    public function __construct()
    {
        $this->dblogin = new LoginModel();
        $this->sesi = \Config\Services::session();
    }
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function save()
    {
        $query = $this->dblogin->query('SELECT newkodeuser()');
        $id = $query->getResult()[0]->{'newkodeuser()'};
        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $izin = $this->request->getPost('izin');
        $password = $this->request->getPost('password');
        $confirm = $this->request->getPost('confirm');
        if (!$password == $confirm) {
            $this->sesi->set([
                'status' => 'password sama'
            ]);
            return redirect()->to('login/register');
        };
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->dblogin->save([
            'id_user' => $id,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $izin
        ]);
        $this->sesi->set([
            'status' => 'berhasil'
        ]);
        return redirect()->to('login');
    }
    public function logincheck()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        if (!empty($this->dblogin->where('username', $username)->first())) {
            $dbpass = $this->dblogin->where('username', $username)->first()['password'];
            if (password_verify($password, $dbpass)) {
                $this->sesi->set([
                    'status' => 'login',
                    'nama' => $this->dblogin->where('username', $username)->first()['nama']
                ]);
                return redirect()->to('dashboard');
            }
            $this->sesi->set([
                'status' => 'gagal'
            ]);
            return redirect()->to('login');
        }
        $this->sesi->set([
            'status' => 'gagal'
        ]);
        return redirect()->to('login');
    }
    public function logout()
    {
        $this->sesi->destroy();
        return redirect()->to('login');
    }
}
