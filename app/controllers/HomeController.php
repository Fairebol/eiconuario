<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Courses;

class HomeController extends Controller {

    public function index()
    {
        return $this->view('index', [
            'title' => 'Home'
        ]);
    }

    public function coursesDecoration($page)
    {
        $backgroundIMG = "";
        $ticketIMG = "";
        $logo = "";

        switch($page)
        {
            case 1:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/IPP.jpg";
                $logo = LOCALHOST . "/img/logos/IPP.jpg";
                break;
            case 2:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/IP.jpg";
                $logo = LOCALHOST . "/img/logos/IP.jpg";
                break;
            case 3:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/MMO.jpg";
                $logo = LOCALHOST . "/img/logos/MMO.jpg";
                break;
            case 4:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/EIE.jpg";
                $logo = LOCALHOST . "/img/logos/EIE.jpg";
                break;
        }

        $courseDecoration = [$backgroundIMG, $ticketIMG, $logo];

        return $courseDecoration;
    }

    public function courses($page)
    {
        $newuser = new User();
        $students = $newuser->where('course_id', $page)->get();

        $typecourse = new Courses();
        $asignatedCourse = $typecourse->where('id', $page)->get();
        $coursename = $asignatedCourse[0]['name'];

        if($page == 0 || $page >= 5)
        {
            return $this->redirect('/');
        }

        $coursesDecoration = HomeController::coursesDecoration($page);

        return $this->view('course', [
            'title' => "Curso: $coursename",
            'page' => $page,
            'course' => $coursename,
            'users' => $students,
            'background' => $coursesDecoration[0]
        ]);
    }

    public function notfound()
    {
        return $this->view('Errors.404', [
            'title' => 'Pagina no Encontrada',
        ]);
    }
}