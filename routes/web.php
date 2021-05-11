<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController; //import class
use App\Http\Controllers\MemberController; //import class
use App\Http\Controllers\AdminController; //import class
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('path', function () {
   command
});

get : ส่งค่าผ่านทาง URL ทำให้ผู้ใช้งาน "มองเห็น" ข้อมูลได้
post : ส่งค่าผ่านผู้ใช้ "มองไม่เห็น" ข้อมูลที่ส่งไป (password)
 
คำสั่งเรียกดู route
D:\xampp\htdocs\basic-laravel>php artisan route:list
+--------+----------+----------+------+---------+------------+
| Domain | Method   | URI      | Name | Action  | Middleware |
+--------+----------+----------+------+---------+------------+
|        | GET|HEAD | /        |      | Closure | web        |
|        | GET|HEAD | api/user |      | Closure | api        |
|        |          |          |      |         | auth:api   |
+--------+----------+----------+------+---------+------------+
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[AboutController::class,'index']); //เรียกแบบใหม่
Route::get('/member',[MemberController::class,'index']); //เรียกแบบใหม่
Route::get('/admin',[AdminController::class,'index']); //เรียกแบบใหม่