<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Libraries\Hash;

class Auth extends BaseController
{
    //tampilkan halaman login
    public function index()
    {
        return view('auth/login');
    }

    //fungsi login
    public function doLogin()
    {
        $user = new UserModel();

        //inisialisasi username dan passoword ke dalam variabel
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //perintah sql untuk mengecek apakah username ada di dalam database
        $dataUser = $user->where(['username' => $username,])->first();

        
        if ($dataUser) {
            //jika username ada di dalam database maka selanjutnya periksa password
            if ($password === $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['username'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin'));
            } else {
                //jika password tidak sesuai maka tampilkan dialog
                session()->setFlashdata('error', 'Password Anda Salah');
                return redirect()->back();
            }
        } else {
            //jika username tidak ditemukan maka tampilkan dialog 
            session()->setFlashdata('error', 'Username Tidak ditemukan');
            return redirect()->back();
        }
    }
}
