<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Employee_as_position;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all(); 
        return view('list-employee', [ "employees" => $employees ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Employee $employee )
    {
        $position = Position::all();
        $employees = Employee::all(); 
        $listPositions = [];
        return view('action-employee', [ 'employee'=>$employee, 'positions' => $position, 'employees'=>$employees, 'listPositions'=>$listPositions ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|max:15',
            'lastname' => 'required|max:15',
            'identification' => 'required|max:12',
            'phone' => 'required|max:12',
            'address' => 'required|max:50'
        ]);

        $id_employee = Employee::create($request->all())->id;

        for ($i=0; $i < count($request->position); $i++) { 
            Employee_as_position::create(array(
                'id_employee' => $id_employee,
                'id_position' => $request->position[$i]
            ));
        }

        return redirect()->route('employee.index')->with('success','Empleado creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id); 
        $position = Position::all();
        $positionEmployee = Employee_as_position::where('id_employee',$id)->get();
        $listPositions = [];
        foreach ($positionEmployee as $key => $value) {
            array_push($listPositions, $positionEmployee[$key]['id_position']);
        }
        $employees = Employee::all(); 
        return view('action-employee', [ 'employee'=>$employee, 'positions' => $position, 'employees'=>$employees, 'listPositions'=> $listPositions ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'firstname' => 'required|max:15',
            'lastname' => 'required|max:15',
            'identification' => 'required|max:12',
            'phone' => 'required|max:12',
            'address' => 'required|max:50',
        ]);

        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success','Empleado actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Empleado eliminado correctamente.');
    }
}
