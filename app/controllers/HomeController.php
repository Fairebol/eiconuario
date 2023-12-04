<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Courses;

class HomeController extends Controller {

    public function index()
    {
        $logo = LOCALHOST . "/img/logos/eico.png";
        $ticket = LOCALHOST . "/img/TicketCourse.png";

        return $this->view('index', [
            'title' => 'Home',
            'ticket' => $ticket,
            'logo' => $logo
        ]);
    }

    public function courses($page)
    {
        $typecourse = new Courses();
        $asignatedCourse = $typecourse->where('name', strtoupper($page))->first();

        // no escalable
        $tecs = [0, "ipp", "ip", "mmo", "eie"];
        $previouscourse = ($asignatedCourse['id'] == 1 ? $tecs[0] : $tecs[$asignatedCourse['id'] - 1]);
        $nextcourse = ($asignatedCourse['id'] == 4 ? $tecs[0] : $tecs[$asignatedCourse['id'] + 1]);

        $newuser = new User();
        $students = $newuser->where('course_id', $asignatedCourse['id'])->get();

        $coursename = $asignatedCourse['name'];

        $outstandUsers = array_filter($students, function ($student) {
            if ($student['role_id'] != 0) return $student; 
        });

        [$bg, $logo, $ticket, $group] = $this->get_assets(strtolower($page));

        return $this->view('course', [
            'title' => "Curso: $coursename",
            'page' => $page,
            'course' => $coursename,
            'users' => $students,
            'outstanding' => $outstandUsers,
            'background' => $bg,
            'ticket' => $ticket,
            'logo' => $logo,
            'groupImage' => $group,
            'previous' => $previouscourse,
            'next' => $nextcourse
        ]);
    }

    public function upload()
    {
        return $this->view('upload', [
            'title' => 'Pagina de subida'
        ]);
    }

    public function store_upload()
    {
        if ($_POST['psw'] != "eicoanuario2023")
        {
            return "Contraseña incorrecta";
        }

        $csvFile = fopen($_FILES['students']['tmp_name'], 'r');
        fgetcsv($csvFile);

        $sections = [0, 'IPP', 'IP', 'MMO', 'EIE'];

        $usere = new User();

        $pathimgs = "img/photos/2023/";
        $errors = 0;
        
        while (($getData = fgetcsv($csvFile, 10000, ";")) !== FALSE)
        {
            $name = $getData[0];
            $section = array_search($getData[1], $sections);
            $role = $getData[2];
            $path = "photos/2023/" . strtoupper($getData[1]) . "/" . $getData[3];

            if ($name != "Grupal") {
                $usere->create([
                    'fullname' => $name,
                    'pathimg' => $path,
                    'course_id' => $section,
                    'role_id' => $role
                ]);
            }

            if (is_bool(array_search($getData[3], $_FILES['files']['name']))) {
                $errors++;
            } else {
                $key = array_search($getData[3], $_FILES['files']['name']);
                $target = $pathimgs . $getData[1] . "/" . basename($_FILES['files']['name'][$key]);

                if (file_exists($target)) continue;

                if (!move_uploaded_file($_FILES["files"]["tmp_name"][$key], $target)) { 
                    $errors++;
                    continue;
                }
            }
        }

        fclose($csvFile);

        return "Exitoso con $errors Errores";
    }

    protected function get_assets($tec)
    {
        $bg = LOCALHOST . "/img/backgrounds/$tec.jpg";
        $logo = LOCALHOST . "/img/logos/$tec.png";
        $ticket = LOCALHOST . "/img/tickets/Ticket$tec.png";
        $group = LOCALHOST . "/img/photos/2023/$tec/group.jpg";

        return [$bg, $logo, $ticket, $group];
    }

    public function notfound()
    {
        return $this->view('Errors.404', [
            'title' => 'Pagina no Encontrada',
        ]);
    }
}