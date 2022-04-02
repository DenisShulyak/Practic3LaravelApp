<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Staff;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index()
    {
        $header = "Резюме и вакансии";
        return view('page')->with(['header' => $header]);
    }

    public function show()
    {
        return view('resume')->with(['last_name' => 'Иванов', 'prof' => 'Программист', 'phone' => '5-555-5', 'staj' => '4 года', 'avatar' => 'ava1.jpg']);
    }

    public function getNameStage()
    {
        $persons = Person::where('Stage','>=',5)->where('Stage','<=',15)->values('fio');
        return view('persons')->with(['persons'=>$persons]);
    }

    public function getNameStageDeveloper()
    {
        $staff  = Staff::where('staff', 'Программист')->first();
        $persons = $staff->persons;
        return view('fiostage')->with(['persons'=>$persons]);
    }
    public function getCountResumes()
    {
        $count = Person::count();
        return view('countresumes')->with(['count'=>$count]);
    }
    public function getStaff()
    {
        //dd(Str::plural('user'));
        $staffs = Staff::whereIn('id', Person::pluck('staff_id')->toArray())->get();
        return view('staff')->with(['staffs'=>$staffs]);
    }

}

