<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Course;

class HomeController extends Controller {

    public function index()
    {

        return $this->view('index', [
            'title' => 'Home'
        ]);
    }

    public function notfound()
    {
        return $this->view('Errors.404', [
            'title' => 'Pagina no Encontrada'
        ]);
    }

}