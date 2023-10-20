<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard(){
    //    Session::get('admin_deptid')
        $departments = Department::all();
        $users = User::all();
        $admins = Admin::all();
        return view('admin.pages.dashboard', compact('departments','users','admins'));
    }
//    $result = User::where(DB::raw('concat(name," ",surname)') , 'LIKE' , '%keyword%')->get();

    public function applicant(){
        $users = DB::table('users')->leftjoin('departments','users.dept_id','=','departments.id')
        ->join('admissions','users.session_id','=','admissions.id')
        ->select('users.*','admissions.session as session','departments.dept_name as dept_name')
        ->get();
//        $admins= Session::get('admin_deptid');
//    $user = $users->get('dept_id');
//    dd($admins);
        return view('admin.pages.applicant',compact('users'));
    }

    public function filter(Request $req){
        $start_gpa = $req->start_gpa;
        $end_gpa = $req->end_gpa;

        $users = User::where(function ($query1) use ($start_gpa,$end_gpa){
                $query1 -> where('ssc_gpa','>=',$start_gpa)
                        ->where('ssc_gpa','<=',$end_gpa);
                })
                    ->orwhere(function ($query2) use ($start_gpa,$end_gpa){
                $query2 -> where('hsc_gpa','>=',$start_gpa)
                        ->where('hsc_gpa','<=',$end_gpa);
                })
                ->get();

                return view('admin.pages.applicant',compact('users'));
    }

    public function form(){
        $admins =  Admin::leftJoin('departments','admins.dept_id','departments.id')
                ->select('admins.*','departments.dept_name as dept_name')
                ->get();
        $departments = Department::all();
    //    dd($admins->dept_id);
        return view('admin.pages.dept-admin.form', compact('departments','admins'));
    }
    public function take(Request $req){
        $user_exists = Admin::where('email','=',$req->email)->first();
            if ($user_exists) {
                return redirect()->back()->with('error', 'Email already exists.');
            } else{
                $obj = new Admin;
                $obj->name = $req->name;
                $obj->dept_id = $req->dept_name;
                $obj->email = $req->email;
                $obj->password = $req->password;
                $obj->number = $req->number;
                $obj->address = $req->address;
                $obj->role = 'Department Admin';
            //    dd($obj);
                if ($obj->save()) {
                    //echo 'Successfully Inserted';
                    return redirect()->back()->with('success','Department Admin Successfully Registerd.');
                }
            }
    }

    public function view(){
        $admins =  Admin::leftJoin('departments','admins.dept_id','departments.id')
                ->select('admins.*','departments.dept_name as dept_name')
                ->get();
        //        dd($admins);
        return view('admin.pages.dept-admin.view', compact('admins'));
    }

    public function delete($id){
        if(Admin::find($id)->delete()){
        return redirect('admin/view');
        }
    }
}