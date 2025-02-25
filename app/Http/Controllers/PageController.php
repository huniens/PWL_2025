<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return 'Nama: Hanin Mariam <br> NIM: 2341760154';
    }

    public function articles($id) {
        return 'Article Page with Id ' . $id;
    }
}
