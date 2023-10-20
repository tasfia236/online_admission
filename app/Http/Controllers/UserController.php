<?php
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function pendingUsers()
    {
        $department = Department::all();
        $pending_users =  DB::table('users')->leftjoin('departments','users.dept_id','=','departments.id')
        ->join('admissions','users.session_id','=','admissions.id')
        ->select('users.*','admissions.session as session','departments.dept_name as dept_name')
        ->get();
        return view('admin.pages.genarate', compact('pending_users','department'));
    }
    public function userFilter(Request $req){
        $start_gpa = $req->start_gpa;
        $end_gpa = $req->end_gpa;
        $dept_name = $req->dept_name;
        
        $department = Department::all();
        $pending_users = User::leftjoin('departments','users.dept_id','=','departments.id')
        ->join('admissions','users.session_id','=','admissions.id')
        ->select('users.*','admissions.session as session','departments.dept_name as dept_name')
        
            ->where('dept_name','=',$dept_name)
  //          ->where(function ($query) use ($dept_name,$start_gpa,$end_gpa){
    //            $query -> where('dept_name','=',$dept_name)
                
            ->orwhere(function ($query1) use ($start_gpa,$end_gpa){
                      $query1 -> where('ssc_gpa','>=',($start_gpa or null))
                          ->where('ssc_gpa','<=',($end_gpa or null));
                      })
                      ->orwhere(function ($query2) use ($start_gpa,$end_gpa){
                      $query2 -> where('hsc_gpa','>=',($start_gpa or null))
                          ->where('hsc_gpa','<=',($end_gpa or null));
  //                    });
                      })
            ->get(); 
                return view('admin.pages.genarate',compact('pending_users','department'));
    }

    public function approveUser($id)
    {
        //dd($id);
        User::where('id', $id)->update(['status' => true]);
        return redirect()->back();
    }

    public function deleteUser($id){
        if(User::find($id)->delete()){
            return redirect('admin/genarate');
            }
    }
    public function profileUser($id){
        $applicant = User::find($id);
        $pending_users =  DB::table('users')
        ->leftjoin('departments','users.dept_id','departments.id')
        ->join('admissions','users.session_id','=','admissions.id')
        ->select('users.*','admissions.session as session','departments.dept_name as dept_name')
        ->get();
    //    dd($applicant);
            return view('admin.pages.profileview',compact('applicant'));
            
    }
    public function profile(){
        return view('website.profile');
    }

    public function admit(){
      $users= Session::get('user_status');
  //    dd($users);
      if($users == 1){
        
        return view('website.admit');
      }
      else{
        return redirect()->back()->with('error','AdmitCard Not Generated.');
      }
    }
}