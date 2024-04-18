<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link href="{{url('css/rgstyle.css')}}" rel="stylesheet">
  <title>Registration Page</title>
</head>
<body>
  <div class="card">
    <div class="container">
      <h2>نظام التسجيل الطلاب</h2>
      <form action="{{ route('student.updated', $Students['id']) }}" method="POST">
        @csrf
        <h3>صفحة التسجيل</h3>
        <div class="field">
          <i class="fas fa-user"></i>
          <input type="text" class="name"
          placeholder=" أسم الطالب" name="name" value="{{ $Students['name'] }}">
        </div>
        <div class="field">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <input type="number" class="phon"
          placeholder=" رقم الجوال" name="phone" value="{{ $Students['phone'] }}">
        </div>
        <div class="field">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <input type="text" class="address"
          placeholder=" العنوان / السكن" name="address" value="{{ $Students['addrs'] }}">
        </div>
        <div class="field">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="email" class="email"
          placeholder=" الايميل / البريد الكتروني" name="email" value="{{ $Students['email'] }}">
        </div>
        <div class="field">
          <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
          <input type="text" class="Section"
          placeholder=" القسم / التخصص" name="section" value="{{ $Students['Section'] }}">
        </div>
        <button type="submit" name="submit" class="btn">تسجيل</button>
      </form>
    </div>
  </div>
  </div>
</body>
</html>