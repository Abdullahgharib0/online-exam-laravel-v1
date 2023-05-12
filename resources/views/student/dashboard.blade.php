@extends('layout.student-layout')


@section('space-work')
<h2>Exams</h2>

  <table class="table">

  <thead>
    <th>#</th>
    <th>Exam Name</th>
    <th>Subject Name</th>
    <th>Date</th>
    <th>Time</th>
    <th>Total Attempt</th>
    <th>Available Attempt</th>
    <th>Exam Link</th>
  </thead>

  <tbody>
    @if (count($exams) > 0)
    @php $count = 1; @endphp
    @foreach ($exams as $exam)
        <tr>
            <td style="display:none;">{{ $exam->id }}</td>
            <td>{{ $count++ }}</td>
            <td>{{ $exam->exam_name }}</td>
            <td>{{ $exam->subjects[0]['subject'] }}</td>
            <td>{{ $exam->date }}</td>
            <td>{{ $exam->time }} Hrs</td>
            <td>{{ $exam->attempt }} Time</td>
            <td>{{ $exam->attempt_counter }}</td>
            <td><a href="#" data-code="{{ $exam->enterance_id }}" class="copy btn btn-primary text-white">Start Exam</a></td>
        </tr>
    @endforeach
    
    @else

      <tr>
        <td colspan="8">No Exams Available!</td>
      </tr>

    @endif
  </tbody>

  </table>

  <script>
    $(document).ready(function(){
      $(this).parent().prepend();
      
        $('.copy').click(function(){
          
          var code = $(this).attr('data-code');
          var url = "{{URL::to('/')}}/exam/"+code;

          var $temp = $("<input>");
          $("body").append($temp);
          $temp.val(url).select();
          document.execCommand("copy");
          $temp.remove();
          
          $('a').click(function () {
            window.open("{{URL::to('/')}}/exam/"+code, 'window' );
            return false;
          });
        });

    });
    

  </script>

@endsection

