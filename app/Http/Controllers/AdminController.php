<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Answer;
use App\Models\User;



use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
  public function addSubject(Request $request)
  {
    
    try {

      Subject::insert([
        
      'subject' => $request -> subject

      ]);
      
      return response() -> json(['success' => true,'msg' => 'Subject added Successfully!']);

    } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
    }
    
  }

  //edit subject
  public function editSubject(Request $request)
  {
    
    try {

      $subject = Subject::find($request -> id);
      $subject -> subject = $request -> subject;
      $subject -> save();
      return response() -> json(['success' => true,'msg' => 'Subject updated Successfully!']);

    } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e -> getMessage()]);
    }
    
  }


  //delete subject
  public function deleteSubject(Request $request)
  {
    
    try {

      Subject::where('id',$request -> id) -> delete();
      
      return response() -> json(['success' => true,'msg' => 'Subject deleted Successfully!']);

    } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
    };
    
  }

  //student dashboard
  public function studentsDashboard()
  {
    $students = User::where('type','student')->get();
    return view('admin.studentsDashboard',compact('students'));
  }

  public function doctorsDashboard()
  {
    $doctors = User::where('type','doctor')->get();
    return view('admin.doctorsDashboard',compact('doctors'));
  }


  //add Student
  public function addStudent(Request $request)
  {
    try {
      
        $password = Str::random(8);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            'type' => $request->type
        ]);

        $url = URL::to('/login');

        $data['url'] = $url;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $password;
        $data['title'] = "Student Registration on Online Exam System";

        FacadesMail::send('registrationMail',['data' => $data],function($message) use ($data){
          $message->to($data['email'])->subject($data['title']);
        });
        return response() -> json(['success' => true,'msg'=>'Student added Successfully!']);

      } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
      };
  }

  //add doctor
  public function addDoctor(Request $request)
  {
      try {
        
        $password = Str::random(8);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            'type' => $request->type
        ]);

        $url = URL::to('/login');

        $data['url'] = $url;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $password;
        $data['title'] = "doctor Registration on Online Exam System";

        FacadesMail::send('registrationMail',['data' => $data],function($message) use ($data){
          $message->to($data['email'])->subject($data['title']);
        });
        return response() -> json(['success' => true,'msg'=>'Student added Successfully!']);

      } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
      };
  }


  //Update Student 
  public function editStudent(Request $request)
  {
    try {

        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        $url = URL::to('/login');

        $data['url'] = $url;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['title'] = "Updated student profile on Online Exam System";

        FacadesMail::send('updateProfileMail',['data' => $data],function($message) use ($data){
          $message->to($data['email'])->subject($data['title']);
        });
        return response() -> json(['success' => true,'msg'=>'Student updated Successfully!']);

      } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
      };
  }
  //Update doctor 
  public function editDoctor(Request $request)
  {
    try {

        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        $url = URL::to('/login');

        $data['url'] = $url;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['title'] = "Updated doctor profile on Online Exam System";

        FacadesMail::send('updateProfileMail',['data' => $data],function($message) use ($data){
          $message->to($data['email'])->subject($data['title']);
        });
        return response() -> json(['success' => true,'msg'=>'doctor updated Successfully!']);

      } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
      };
  }

  //delete student 
  public function deleteStudent(Request $request)
  {
    try {
      
      User::where('id',$request->id)->delete();
      return response() -> json(['success' => true,'msg' =>'Student deleted successfully!']);
      
    } catch (\Exception $e) {
      return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
    };
  }

  //delete doctor 
  public function deleteDoctor(Request $request)
  {
    try {
      
      User::where('id',$request->id)->delete();
      return response() -> json(['success' => true,'msg' =>'Doctor deleted successfully!']);

      } catch (\Exception $e) {
        return response() -> json(['success' => false,'msg' => $e ->getMessage()]);
      };
  }


}