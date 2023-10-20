<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Admission;
use App\Models\District;
use App\Models\Division;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;
class HomeController extends Controller
{
    public function show(){
        $mxvalue = Admission::whereRaw('id = (select max(`id`) from admissions)')->get();
        return view('website.home',compact('mxvalue'));
    }
    public function Register(){
        $departments = Department::all();
        $sessions = Admission::all();
        $divisions = Division::all();
        $districts = District::all();
    //    dd($sessions);
        return view('website.auth.register', compact('departments','sessions','divisions','districts'));
    }
    public function UserRegister(Request $req){
        
            $originalImage = $req->file('picture');
            $thumbnailImage = \Intervention\Image\Facades\Image::make($originalImage);
            $thumbnailPath = public_path() . '/thumbnail/';
            $originalPath = public_path() . '/images/';
            $extension = $originalImage->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $thumbnailImage->save($originalPath . $filename);
            $thumbnailImage->resize(150, 150);
            $thumbnailImage->save($thumbnailPath . $filename);
            
            $user_exists = User::where('email','=',$req->email)->first();
            if ($user_exists) {
                return redirect()->back()->with('error', 'Email already exists.');
            } else{
                $obj = new User;
                $obj->first_name = $req->first_name;
                $obj->last_name = $req->last_name;
                $obj->email = $req->email;
                $obj->number = $req->number;
                $obj->father_name = $req->father_name;
                $obj->mother_name = $req->mother_name;
                $obj->father_number = $req->father_number;
                $obj->password = $req->password;
                $obj->picture = $filename;
                $obj->date_of_birth = $req->date_of_birth;
                $obj->dept_id = $req->dept_name;
                $obj->session_id = $req->session;

                $obj->ssc_gpa = $req->ssc_gpa;
                $obj->hsc_gpa = $req->hsc_gpa;
                $obj->ssc_board = $req->ssc_board;
                $obj->hsc_board = $req->hsc_board;
                $obj->ssc_group = $req->ssc_group;
                $obj->hsc_group = $req->hsc_group;

                $obj->address = $req->address;
                $obj->district_id = $req->district;
                $obj->division_id = $req->division;
                
                $obj->role = 'Student';
                
                if ($obj->save()) {
                    
                    return redirect()->back()->with('success', 'User Registered. waiting for admin approval.');
                }
            }

    }
    public function login(){
        return view('website.auth.login');
    }
    public function userLogin(Request $req)
    {    
        $email = $req->email;
        $password = $req->password;
        $users = User::where('email', '=', $email)
            ->where('password', '=', $password)
            ->leftjoin('departments','users.dept_id','departments.id')
            ->leftjoin('admissions','users.session_id','admissions.id')
            ->select('users.*','departments.dept_name as dept_name','admissions.session as session')
        //    ->select('users.*','admissions.session as session')
            ->first();
        $admins = Admin::where('email', '=', $email)
            ->where('password', '=', $password)
            ->first();
        //    dd($users);
        if ($users) {
    //        if ($users->status == 1){
                Session::put('user_id', $users->id);
                Session::put('user_name', $users->name);
                Session::put('user_fname', $users->first_name);
                Session::put('user_lname', $users->last_name);
                Session::put('user_session', $users->session);
                Session::put('user_email', $users->email);
                Session::put('father_name', $users->father_name);
                Session::put('user_dob', $users->date_of_birth);
                Session::put('mother_name', $users->mother_name);
                Session::put('user_address', $users->address);
                Session::put('user_dept', $users->dept_name);
                Session::put('user_number', $users->number);
                Session::put('user_pic', $users->picture);
                Session::put('user_role', $users->role);
                Session::put('user_status',$users->status);
                Session::put('user_deptid', $users->dept_id);
        //        dd($users);
                return redirect('profile');
      //      } else {
        //        return redirect()->back()->with('error', 'User Not Approved Yet.');
          //  }
        }
        else if($admins){
        //    $dept_id = Admin::get('dept_id');
            Session::put('admin_name', $admins->name);
            Session::put('admin_email', $admins->email);
            Session::put('admin_deptid', $admins->dept_id);
            Session::put('admin_role', $admins->role);
    //        $dept_id = Session::get('admin_deptid');
    //        dd($dept_id);
            return redirect('admin/dashboard');
            
        }
        else{
            return redirect()->back()->with('error', 'Wrong your Password or Email');
        }
    }
    
    public function logout(request $request)
    {
        $request->session()->forget(['admin_name', 'admin_email' , 'admin_role']);
        $request->session()->forget(['user_name', 'user_email' , 'user_role']);
        
        return redirect('login');
    }
}