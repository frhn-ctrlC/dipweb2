<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        echo view('Layout/header');
        echo view('Layout/footer');
        echo view('Layout/home');
    }
}
