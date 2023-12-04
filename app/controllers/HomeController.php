<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Courses;

class HomeController extends Controller {

    public function index()
    {
        $coursesDecoration = HomeController::coursesDecoration(0);

        return $this->view('index', [
            'title' => 'Home',
            'ticket' => $coursesDecoration[1],
            'logo' => $coursesDecoration[2]
        ]);
    }

    public function coursesDecoration($page)
    {
        $backgroundIMG = "";
        $ticketIMG = "";
        $logo = "";
        $groupIMG = "";

        switch($page)
        {
            case 1:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/IPP.jpg";
                $logo = LOCALHOST . "/img/logos/IPP.png";
                $ticketIMG = LOCALHOST . "/img/tickets/TicketIPP.png";
                $groupIMG = LOCALHOST . "/img/IPP/group/group.jpg";
                break;
            case 2:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/IP.jpg";
                $logo = LOCALHOST . "/img/logos/IP.png";
                $ticketIMG = LOCALHOST . "/img/tickets/TicketIP.png";
                break;
            case 3:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/MMO.jpg";
                $logo = LOCALHOST . "/img/logos/MMO.png";
                $ticketIMG = LOCALHOST . "/img/tickets/TicketMMO.png";
                break;
            case 4:
                $backgroundIMG = LOCALHOST . "/img/backgrounds/EIE.jpg";
                $logo = LOCALHOST . "/img/logos/EIE.png";
                $ticketIMG = LOCALHOST . "/img/tickets/TicketEIE.png";
                break;
            default:
                $logo = LOCALHOST . "/img/logos/eico.png";
                $ticketIMG = LOCALHOST . "/img/TicketCourse.png";
        }

        $courseDecoration = [$backgroundIMG, $ticketIMG, $logo, $groupIMG];

        return $courseDecoration;
    }

    public function courses($page)
    {
        $newuser = new User();
        $students = $newuser->where('course_id', $page)->get();
        
        $outstandUsers = array_filter($students, function ($students) {
            for ($i = 0; $i < count($students); $i++) {
                if ($students['role_id'] != null) return $students; 
            }
        });

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
            'outstanding' => $outstandUsers,
            'background' => $coursesDecoration[0],
            'ticket' => $coursesDecoration[1],
            'logo' => $coursesDecoration[2],
            'groupImage' => $coursesDecoration[3]
        ]);
    }

    public function notfound()
    {
        return $this->view('Errors.404', [
            'title' => 'Pagina no Encontrada',
        ]);
    }
}