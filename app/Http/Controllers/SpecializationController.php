<?php

namespace App\Http\Controllers;
use App\Models\Doctor;

use Illuminate\Http\Request;
use App\Models\Specialization;

class SpecializationController extends Controller
{
    public function index(){
        return view('admin.add_specialization');

    }
    public function add_specializations(Request $request){
        Specialization::create([
            'spec_name' => $request->spec_name,

        ]);
        session()->flash('Add', 'Specialization has been added successfully');
        return back();
    }


}
