<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ $data['title'] }}</title>
</head>
<body>
  
  <a class="bg-dark p-3 tt1"  href="{{ $data['url'] }}">Online Exam system</a>


  <table>
    <tr>
      <th>Name</th>
      <th>{{ $data['name'] }}</th>
    </tr>
    <tr>
      <th>Email</th>
      <th>{{ $data['email'] }}</th>
    </tr>
  </table>
  <p><b>Note:- </b> You can use your old password.</p>

  <a href="{{ $data['url'] }}">Click here to login your Account.</a>
  <p>Thank You!</p>

</body>
</html>