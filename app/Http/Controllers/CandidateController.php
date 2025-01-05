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
        $position = \App\Models\Position::find($id);
        return view('hr_mgr.candidates', ["position"=>$position]);
    }
    public function create(Request $req){
        $positions = \App\Models\Position::all();
        try{
            $validatedData=$req->validate([
                "name"=>"required",
                "email"=>"required",
                "phone"=>"required",
                "position_id"=>"required",
                "cv"=>"required",
            ]);
            $candidate = new candidate_recruitment();
            $candidate->name = $validatedData["name"];
            $candidate->email = $validatedData["email"];
            $candidate->phone = $validatedData["phone"];
            $candidate->position_id = $validatedData["position_id"];
            $file = $req->file('cv');
            $filePath = 'uploads/' . $file->getClientOriginalName(); // Move the file to the public directory $file->move(public_path('uploads'), $file->getClientOriginalName());
            $candidate->cv = $filePath;
            $candidate->save();
            return redirect()->route('candidate_index');
        }catch(ValidationException $e){
            return redirect()->back()->withErrors($e->errors());
        }
        return view('hr_mgr.add_candidate', ["positions"=>$positions]);
    }
}
