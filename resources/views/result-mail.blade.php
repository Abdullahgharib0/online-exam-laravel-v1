<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $data['title'] }}</title>
</head>
<body>
  

  <p>
        <b>Hii {{ $data['name'] }},</b> your Exam({{ $data['exam_name'] }}) review passed,
        So now yo u can check your Marks.
  </p>

  <a href="{{ $data['url'] }}">Click here to go on results Page.</a>
  <p>Thanks You!</p>

</body>
</html>