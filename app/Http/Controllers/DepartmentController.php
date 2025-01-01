<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        //
        
        return view("hr_mgr.division_index",[
            "departments"=>Department::All(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        //
        $dep=Department::create([
            "name"=>$req->input("DepartmentName"),
            "super_visisor"=>$req->input("employeeId"),
        ]);
        if($dep){
            return redirect()->route("department_index");
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $req,$id)
    {
        //
        Department::find($id)->update([
            "name"=>$req->input("dep_name"),
            "super_visisor"=>$req->input("super_visisor"),
        ]);
        return true;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req,$id)
    {
        //
        return Department::find($id)->delete();
    }
}
