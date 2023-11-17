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

        return $this->view('course', [
            'title' => "Curso: $coursename",
            'page' => $page,
            'course' => $coursename,
            'users' => $students
        ]);
    }

    public function notfound()
    {
        return $this->view('Errors.404', [
            'title' => 'Pagina no Encontrada',
        ]);
    }
}