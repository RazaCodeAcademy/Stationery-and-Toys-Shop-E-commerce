<?php

namespace App\Http\Controllers\Manager;

use App\Employee;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
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
        $employees = User::all();
        return view('Manager.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('Manager.employees.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $thumbnail = "";
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time(). '.' .$extension;
            $file->move('uploads/employee/images/',$filename);
            $thumbnail = $filename;
        } else {
            return $request;
            $thumbnail = '';
        }
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $thumbnail,
            'password' => bcrypt($request->input('password')),
        ]);


        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->phone = $request->phone;
        $employee->cnic = $request->cnic;
        $employee->salary = $request->salary;
        $employee->address = $request->address;
        $employee->age = $request->age;
        $employee->save();

        $user->roles()->attach($request->role);

        return redirect()->route('employees.index')->with('success', 'Employee has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = User::find($id);
        return view('Manager.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $employee = Employee::where('user_id', $id)->get();
        $roles = Role::all();
        return view('Manager.employees.edit', compact('user','employee', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $thumbnail = "";
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time(). '.' .$extension;
            $file->move('uploads/employee/images/',$filename);
            $thumbnail = $filename;
        } else {
            // return $request;
            $thumbnail = '';
        }
        User::find($id)->save([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $thumbnail,
            'password' => bcrypt($request->input('password')),
        ]);
        $user->employee()->update([
            'phone' => $request->input('phone'),
            'cnic' => $request->input('cnic'),
            'salary' => $request->input('salary'),
            'address' => $request->input('address'),
        ]);
        $user->roles()->sync($request->role);
        return redirect()->route('employees.index')->with('success', 'Employee has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::where('user_id', $id);
        $employee->delete();
        $user = User::find($id);
        $user->delete();
        return redirect()->route('employees.index')->with('success', 'Emplyee Data has been deleted successfully!');
    }
}
