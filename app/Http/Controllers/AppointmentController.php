<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use Illuminate\Http\Request;
use App\Models\Specialization;

class AppointmentController extends Controller
{
   public function add_appintment(Request $request)
   {
    Appointement::create([
    'name'=>$request->name,
    'phone'=>$request->phone,
    'email'=>$request->email,
    'spec_id'=>$request->spec_id,
    'age'=>$request->age,
    'date'=>$request->date,
    'time_from'=>$request->time_from,
    'time_to'=>$request->time_to,
    ]);
    session()->flash('Add', 'Specialization has been added successfully');
    return back();
}

public function selectSpec(){
    $specs = Specialization::all();
    return view('user.books',compact('specs'));
}
   }
