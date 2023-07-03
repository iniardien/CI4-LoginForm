<?php

namespace App\Controllers;

class Home extends BaseController
{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        if ($this->session->has('username') == "") {
            return redirect()->to("/login");
        } else {
            return view('vw_home');
        }
    }
}
