<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function HomeIndex()
    {
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);
        //$ServicesData= json_decode( ServicesModel::all());
        //$CoursesData= json_decode(CourseModel::orderBy('id','desc')->limit(6)->get());
        //$ProjectData=json_decode(ProjectsModel::orderBy('id','desc')->limit(10)->get());
        //$ReviewData= json_decode( ReviewModel::all());

        return view('Home',[
            'ServicesData'=>$ServicesData,
            'CoursesData'=>$CoursesData,
            'ProjectData'=>$ProjectData,
            'ReviewData'=>$ReviewData,
        ]);
    }// end method

}
