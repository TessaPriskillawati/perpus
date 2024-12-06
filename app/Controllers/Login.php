<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $ModelMember = new \App\Models\ModelMember();
        $login = $this->request->getPost('login');
        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if ($member_username == '' or $member_password == '') {
                $err = "Silahkan Masukan Username dan Password";
            }
            if (empty($err)) {
                $dataMember = $ModelMember->where("member_username", $member_username)->first();
                if ($dataMember['member_password'] != md5($member_password)) {
                    $err = "Password tidak sesuai";
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'member_id' => $dataMember['member_id'],
                    'member_username' => $dataMember['member_username'],
                    'member_password' => $dataMember['member_password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('buku');
            }
            if ($err) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }
        return view('login_view');
    }
}
