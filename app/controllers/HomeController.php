<?php

namespace App\Controllers;

use App\Models\RoleUser;
use App\Models\User;

class HomeController extends Controller {

    public function index()
    {
        $users = new User();
        $users = $users->allWithMM('roles', true, ["name", "role"])->get();

        return $this->view('index', [
            'title' => 'Home',
            'users' => $users
        ]);
    }

    public function notfound()
    {
        return $this->view('Errors.404', [
            'title' => 'Pagina no Encontrada'
        ]);
    }

}