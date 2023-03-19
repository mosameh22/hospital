<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointement;
use Illuminate\Http\Request;
use App\Models\Specialization;
use Illuminate\Support\Facades\DB;

class AddDoctorController extends Controller
{
   public function show(){
    $specializations = Specialization::all();

    return view('admin.add_doctor',compact('specializations'));
   }
   public function add_doctor(Request $request){
    Doctor::create([
         'name' => $request->name,
         'address' => $request->address,
         'phone' => $request->phone,
         'spec_id'=>$request->spec_id
            ]);
            session()->flash('Add', 'Doctor has been added successfully');
            return back();
}
public function index(){
    $show_doctors = Doctor::all();
    return view('user.doctors',compact('show_doctors'));
}

public function show_doctors_admin(){
    $show_doctors_admin = Doctor::all();
    return view('admin.show_doctors',compact('show_doctors_admin'));
}
public function delete($id){
$doctors = Doctor::find($id);
$doctors->delete();
session()->flash('Add', 'Doctor has been deleted successfully');
return back();
}
public function showAppointments(){
    $Appontments = Appointement::all();
    return view('admin.showAppointments',compact('Appontments'));

}
public function deleteAppo($id){
    $appointment = Appointement::find($id);
    $appointment->delete();
    session()->flash('Add', 'Appointment has been deleted successfully');
    return back();
    }
    public function showspecialization(){
        $specializations = Specialization::all();
        return view('admin.show_specialixation',compact('specializations'));
       }
       public function deletespeca($id){
        $spec = Specialization::find($id);
        $spec->delete();
        session()->flash('Add', 'Specialization has been deleted successfully');
        return back();
       }
       public function edit_doctors($id){
        $doctors = Doctor::find($id);
        $spec = Specialization::all();
        return view('admin.edit_doctors',compact('doctors','spec'));

       }
       public function update( Request $request,$id){
     DB::table('doctors')->where('id',$id)->update([
      'name'=>$request->name,
      'spec_id'=>$request->spec_id,
      'phone'=>$request->phone,
      'address'=>$request->address,
     ]);
     session()->flash('Add', 'doctors has been updated successfully');
     return  redirect()->back();

       }
}

