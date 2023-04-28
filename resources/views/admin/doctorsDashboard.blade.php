@extends('layout/admin-layout')

@section('space-work')
    <h2 class="mb-4">Doctors</h2>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDoctorModel">
      Add doctor
  </button>

    <table class="table">
        <thead>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>
        <tbody>
          @if (count($doctors) > 0)
              @foreach ($doctors as $doctor)
              <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->type }}</td>
                <td>
                      <button type="button" data-id="{{ $doctor->id }}" data-name="{{ $doctor->name }}"  data-email="{{ $doctor->email }}" data-type="{{ $doctor->type }}" class="btn btn-info editButton" data-toggle="modal" data-target="#editDoctorModel">
                        Edit
                    </button>
                </td>
                <td>
                  <button type="button" data-id="{{ $doctor->id }}" class="btn btn-danger deleteButton" data-toggle="modal" data-target="#deleteDoctorModel">
                    Delete
                </button>
                </td>
              @endforeach
          @else
              <tr>
                <td colspan="3">Doctors not found!</td>
              </tr>
          @endif
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="addDoctorModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Doctor</h5>



                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addDoctor">
                  @csrf
                  <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="w-100" name="name" placeholder="Enter Doctor Name" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="email" class="w-100" name="email" placeholder="Enter Doctor Email" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                    <select name="type" class="w-50 btn-dark" required>
                                      <option>doctor</option>
                                    </select>
                            </div>
                        </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add Doctor</button>
                  </div>
              </form>
            </div>
        </div>
    </div>


    <!--Edit Doctor Modal -->
    <div class="modal fade" id="editDoctorModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Doctor</h5>



                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editDoctor">
                  @csrf
                  <div class="modal-body">
                        <div class="row">
                            <div class="col">
                              <input type="hidden" name="id" id="id">
                                <input type="text" class="w-100" name="name" id="name" placeholder="Enter Doctor Name" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="email" class="w-100" name="email" id="email" placeholder="Enter Doctor Email" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                    <select name="type" class="w-50 btn-dark" required>
                                      <option>doctor</option>
                                    </select>
                            </div>
                        </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary updateButton">Update Doctor</button>
                  </div>
              </form>
            </div>
        </div>
    </div>


    <!--Delete Doctor Modal -->
    <div class="modal fade" id="deleteDoctorModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Doctor</h5>



                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteDoctor">
                  @csrf
                  <div class="modal-body">
                    <p>Are your sure you want to delete doctor?</p>
                        <input type="hidden" name="id" id="doctor_id">
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                  </div>
              </form>
            </div>
        </div>
    </div>


    <script>
      $(document).ready(function () {
              $("#addDoctor").submit(function (e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                  url:"{{ route('addDoctor') }}",
                  type:"POST",
                  data:formData,
                  success:function(data){
                      if(data.success == true){
                          location.reload();
                      }
                      else{
                        alert(data.msg);
                      }
                  }
                })
              });

              //edit button click and show value

              $(".editButton").click(function(){

                $("#id").val( $(this).attr('data-id') );
                $("#name").val( $(this).attr('data-name') );
                $("#email").val( $(this).attr('data-email') );
                $("#type").val( $(this).attr('data-type') );

              });
              $("#editDoctor").submit(function (e) {
                e.preventDefault();
                $('.updateButton').prop('disabled',true);

                var formData = $(this).serialize();

                $.ajax({
                  url:"{{ route('editDoctor') }}",
                  type:"POST",
                  data:formData,
                  success:function(data){
                      if(data.success == true){
                          location.reload();
                      }
                      else{
                        alert(data.msg);
                      }
                  }
                })
              });


              $(".deleteButton").click(function(){
                  var id = $(this).attr('data-id');
                  $("#doctor_id").val(id);
                });

                $("#deleteDoctor").submit(function (e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                  url:"{{ route('deleteDoctor') }}",
                  type:"POST",
                  data:formData,
                  success:function(data){
                      if(data.success == true){
                          location.reload();
                      }
                      else{
                        alert(data.msg);
                      }
                  }
                })
              });

      });
    </script>

@endsection
