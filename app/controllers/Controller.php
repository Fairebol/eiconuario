<?php

namespace App\Controllers;

class Controller {

    public function view($path, $data = [])
    {
        extract($data);

        $path = str_replace('.', '/', $path);

        if (file_exists("../resources/views/{$path}.php")) {

            ob_start();
            $child = "../resources/views/{$path}.php";
            include "../resources/views/Layouts/app.php";
            $view = ob_get_clean();

            return $view;
        }

        else {
            return die("La vista PHP no se encontro");
        }
    }

    public function validator(array $camps) 
    {
        foreach ($camps as $camp) {
            if (!isset($_POST[$camp]) || $_POST[$camp] == "") {
                return "Falta el campo " . ucfirst($camp);
            }
        }

        return false;
    }

    public function backWithError(string $route, string $msg)
    {
        session_start();
        $_SESSION['msg'] = [$msg, "e"];
        return header("Location: " . LOCALHOST . $route);
    }

    public function successmsg(string $msg)
    {
        session_start();
        $_SESSION['msg'] = [$msg, "s"];
    }

    public function redirect(string $route)
    {
        return header("Location: " . LOCALHOST . $route);
    }

}