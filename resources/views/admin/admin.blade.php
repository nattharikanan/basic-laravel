<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <?php
    $user = "sds";
    $arr = array("Home","Member","About");
    ?>
   <H1>สวัสดีแอดมินค่ะเตง {{$user}}</H1>

   @if($user == "Nattharika")

   <H1>สวัสดีแอดมินค่ะเตง {{$user}}</H1>

   @else 
   
        <h1>ผู้ใช้ท่านนี้ไม่ได้เป็น admin</h1>
   @endif

   @foreach ($arr as $menu)
       <a href = "">{{$menu}}</a>
   @endforeach

   @for ($i = 1; $i <= 5; $i++)
   <ul>{{ $i }}</ul>
       
   @endfor

</body>
</html>