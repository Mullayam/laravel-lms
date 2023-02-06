<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $usersPerPage =20;

    public function mount(int $usersPerPage){
        $this->usersPerPage = $usersPerPage;
    }

    public function StudentsList(){
        $users = User::paginate($this->usersPerPage);
        return view('admin.students',['users'=>$users]);
    }
    public function AddStudent() {

        return view('admin.student-card');
    }

}
