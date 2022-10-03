<?php

namespace App\Http\Controllers;

use App\Models\Employee_model;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee_model::all();
        return view('dashboard', compact(['employee']));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Employee_model::create($request->all());
        return redirect('/dashboard')->with('success', 'Data has been added !');
    }

    public function edit($id)
    {
        $employee = Employee_model::find($id);
        return view('edit', compact(['employee']));
    }

    public function update($id, Request $request)
    {
        $employee = Employee_model::find($id);
        $employee->update($request->all());
        return redirect('dashboard')->with('success', 'Data has been updated !');
    }

    public function destroy($id)
    {
        $employee = Employee_model::find($id);
        $employee->delete();
        return redirect('dashboard')->with('success', 'Data has been deleted !');
    }
}
