<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ยินดีต้อนรับ</title>
</head>
<body>
    <p>เกี่ยวกับผู้พัฒนาเว็บไซต์ </p>
    <p>ที่อยู่ : {{$city}}</p>
    <p>เบอร์โทร : {{$tel}}</p>
    <p>email : {{$email}}</p>
    <p>แสดงข้อความ : {{$status}}</p>
    <a href="{{url('/')}}">Home</a>
    <a href="{{route('admin')}}">Admin</a>
    <a href="{{route('member')}}">Member</a>
    <a href="{{route('about')}}">About</a>
</body>
</html>