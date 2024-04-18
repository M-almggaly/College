<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link href="{{url('css/slptstyle.css')}}" rel="stylesheet">
  <title>Registration Page</title>
</head>
<body>
    <table>
          <tr id="headeruser">              
                    <th>Id</th>
                    <th>أسم الطالب</th>
                    <th>رقم الجوال</th>
                    <th>العنوان /السكن</th>
                    <th>الايميل/البريدالكتروني</th>
                    <th>القسم /التخصص</th>
                    <th>الحالة الدراسية</th>
                    <th colspan="3">تعديل  او  حذف</th>
                    </tr>
                    <!-- Here We Used Laravel Classes Foreach To iretate The $Students Object That We Recevied From the Controller -->
                    @foreach ( $Students as $student )
                    <tr id="popu">
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->addrs }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->Section }}</td>
                    <td></td>
                    <td>
                    <form action="{{ route('student.update', $student['id']) }}" method="GET">
                    <button type="submit" style="background: transparent"><i class="fa fa-check" style="color: #5bbf90;"></i></button></td>
                    </form>
                    <td>
                    <form action="{{ route('student.destroy', $student['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: transparent"><i class="fa fa-trash" style="color: #fd3333ed;"></i></button>
                    </form>
                    @endforeach
                    </td>
                  </tr>
                    </table>
                    </body>
                    </html>