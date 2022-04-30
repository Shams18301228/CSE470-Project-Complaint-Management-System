<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Complaints;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminsignin(){
         return view('AdminSignIn');
    }
    public function adminsigninprocess(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12',


        ]);
        $admin = Admin::where('email', '=', $request->email)->first();
        $ad = Admin::where('password', '=', $request->password)->first();
        if ($admin ) {
            // if (Hash::check($request->password, $admin->Password)) {
                if($ad){
                $request->session()->put('loginId', $admin->id);
                return redirect('admindashboard');

            } else {
                return back()->with('fail', 'Wrong Password');
            }
        } else {
            return back()->with('fail', 'Email is not registered yet');
        }
    }
    public function admindashboard()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = Admin::where('id', '=', Session::get('loginId'))->first();
            return view('admindashboard', compact('data'));
        }
        return redirect('adminsignin')->with('fail', 'You need to login first');
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('adminsignin');
        }
    }
    public function show_customer_complaints(){
        $data=complaints::all();

        return view('showcustomercomplaints', compact('data'));
    }
   
    public function Approved($id){
        $data=complaints::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }
    public function Canceled($id){
        $data=complaints::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }
    public function show_customer(){
        $data=customer::all();

        return view('showcustomer', compact('data'));
        
    }
    public function RemoveCustomer($id){
        $data=customer::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update_customer_data($id){
        $value= customer::find($id);
        return view('updatecustomerdata', compact('value'));
    }
    public function editcustomer(Request $request, $id){
        $edit= customer::find($id);
        $edit->Name = $request->name;
        $edit->Email = $request->email;
        $edit->Gender = $request->gender;
        $edit->Address = $request->address;
        $edit->Country = $request->country;
        $edit->State = $request->state;
        $edit->DOB = $request->dob;
        $edit->save();
        return redirect()->back()->with('message', 'Customer Information Has Been Updated Successfully');
    }
    public function customer_update_page(){
        $data=customer::all();

        
        return view('Customerdataupdatepage', compact('data'));
    }
}
