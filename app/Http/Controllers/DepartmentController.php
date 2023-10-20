<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Department;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function create(){
        return view('admin.pages.department.create');
    }

    public function store(Request $request){
        $obj = new Department;
        $obj->dept_name = $request->dept_name;
        $obj->dept_code = $request->dept_code;
        $obj->established_date = $request->established_date;

        if ($obj->save()) {
            //echo 'Successfully Inserted';
            return redirect()->back()->with('success','Department Successfully Inserted.');
        }
    }

    public function all(){
        $mxvalue = Admission::whereRaw('id = (select max(`id`) from admissions)')->get();
        $sessions = Admission::all();
        $departments = Department::all();
        return view('admin.pages.department.all', compact('sessions','departments','mxvalue'));
    }

    public function sessionAdd(Request $request){
        $obj = new Admission();
        $obj->session = $request->session_name;

        if ($obj->save()) {
            //echo 'Successfully Inserted';
            return redirect()->back();
        }
    }

    public function upgrade($id,$st){
        
        DB::table('admissions')->where('id', $id)->update([
            
            'status' => $st
        //    'fall_session'=>$st
        ]);

    //    $status="";
      //  $details = Admission::where('id', $id)->get();
        //foreach($details as $data){
      //      $status = $data->status;
    //    }

        return response()->json([
                'success' => true,
                'message' => 'Updated!',
                'status' => $st,

        ]);
    }

    public function edit($id)
    {
        // select * from employees where id=1
        $departments = Department::find($id);
        return view('admin.pages.department.edit', compact('departments'));
    }
    public function update(request $request, $id)
    {
        $obj = Department::find($id);
        $obj->dept_name = $request->dept_name;
        $obj->dept_code = $request->dept_code;
        $obj->established_date = $request->established_date;
        if ($obj->save()) {
            //echo 'Successfully Updated';
            return redirect()->back()->with('success','Department Successfully Updated.');
        }
    }

    public function delete($id)
    {
        if (Department::find($id)->delete()) {
            return redirect('department/all');
        }
    }
}