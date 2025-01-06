<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidate_recruitment;
use Illuminate\Validation\ValidationException;
class CandidateController extends Controller
{
    //
    public function index(){
        $positions = candidate_recruitment::all();

        return view('hr_mgr.candidates', ["candidates"=>$positions]);
    }
    public function show(Request $req,$id){
        $position = \App\Models\Positions::find($id);
        return view('hr_mgr.candidates', ["position"=>$position]);
    }
    public function create(Request $req){
        $positions = \App\Models\Positions::all();
        try{
            $validatedData=$req->validate([
                "name"=>"required",
                "email"=>"required",
                "phone"=>"required",
                "position_id"=>"required",
                "cv"=>"required|file|mimes:pdf",
            ]);
            $candidate = new candidate_recruitment();
            $candidate->name = $validatedData["name"];
            $candidate->email = $validatedData["email"];
            $candidate->phone = $validatedData["phone"];
            $candidate->position_id = $validatedData["position_id"];
            $candidate->status = $req->input("status");
            $candidate->position_id = $req->input("position_id");
            $file = $req->file('cv');
            $fileName ="uploads/".time() . '_' . $file->getClientOriginalName(); // Store file in the public directory 
            $file->move(public_path('uploads'), $fileName); // Move the file to the public directory $file->move(public_path('uploads'), $file->getClientOriginalName());
            $candidate->resume =  $fileName ;
            $candidate->save();
            return redirect()->route('candidate_index');
        }catch(ValidationException $e){
            dd($e->errors());
            return redirect()->back()->withErrors($e->errors());
        }
        return view('hr_mgr.add_candidate', ["positions"=>$positions]);
    }
    public function delete(Request $req,$id){
        candidate_recruitment::destroy($id);
        return ["status"=>"success"];
    }
}
