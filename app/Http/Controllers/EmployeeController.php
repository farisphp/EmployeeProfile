<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = DB::table('employees')->paginate(5);

        return view('employee/index',['employee' => $employee]);
    }

    public function add()
    {
        return view('employee/add');
    }

    public function store(Request $request)
    {
        DB::table('employees')->insert([
            'EmployeeName' => $request->name,
            'EmployeePosition' => $request->position,
            'EmployeeAge' => $request->age,
            'EmployeeAddress' => $request->address
        ]);

        return redirect('/employee');
    }

    public function edit($id)
    {
        $employee = DB::table('employees')->where('EmployeeId', $id)->get();

        return view('employee/edit',['employee' => $employee]);
    }

    public function update(Request $request)
    {
        DB::table('employees')->where('EmployeeId', $request->id)->update([
            'EmployeeName' => $request->name,
            'EmployeePosition' => $request->position,
            'EmployeeAge' => $request->age,
            'EmployeeAddress' => $request->address
        ]);

        return redirect('/employee');
    }

    public function delete($id)
    {
        DB::table('employees')->where('EmployeeId', $id)->delete();

        return redirect('/employee');
    }
}
