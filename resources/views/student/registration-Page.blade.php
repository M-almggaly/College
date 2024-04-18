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

      <form method="POST">
        @csrf
        <h3>صفحة التسجيل</h3>
        <div class="field">
          <i class="fas fa-user"></i>
          <input type="text" class="name"
          placeholder=" أسم الطالب" name="name">
        </div>
        <div class="field">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <input type="number" class="phon"
          placeholder=" رقم الجوال" name="phone">
        </div>
        <div class="field">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <input type="text" class="address"
          placeholder=" العنوان / السكن" name="address">
        </div>
        <div class="field">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="email" class="email"
          placeholder=" الايميل / البريد الكتروني" name="email">
        </div>
        <div class="field">
          <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
          <input type="text" class="Section"
          placeholder=" القسم / التخصص" name="section">
        </div>
        <div class="Choices">
          <div class="general">
          <input type="radio" class="radio" name="type">
          <label>عام</label>
          </div>
          <div>
          <input type="radio" class="radio" name="type">
          <label>موازي</label>
        </div>
        </div>
        <button type="submit" name="submit" class="btn">تسجيل</button>
      </form>
    </div>
  </div>

  <div class="blob">
    <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
    <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350">
    <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z"/>
    </svg>
  </div>
</body>
</html>