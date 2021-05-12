<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function index()
    {
        $city = "59 หมู่ 2 ";
        $tel ="062-3974641";
        $email = "nattharikanan.work@gmail.com";
     
        /*return view('member.about',['address'=>$city],['tel'=>$tel]); //การส่งต่าแบบ assosiate มีคีย์และ value*/
        
        /*return view('member.about',compact('city','tel','email')); //การใช้ compact การส่งแบบ array ส่งไปเลยไม่ระบุ $*/
    
        return view ('member.about')
        ->with('city',$city)
        ->with('tel',$tel)
        ->with('email',$email)
        ->with('status','บันทึกข้อมูลเรียบร้อยแล้ว')
        ->with('error','404 not found หาข้อมูลไม่เจอ'); //ส่งไปตรงๆก็ได้
        //การส่งข้อมูลไปหน้า view ด้วย with
        
    }
    
}