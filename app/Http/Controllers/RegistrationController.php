<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Complaints;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class RegistrationController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('form');
    }
    public function signin()
    {
        return view('SignIn');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:5|max:12',


        ]);

        $customer = new Customer;
        $customer->Name = $request->name;
        $customer->Email = $request->email;
        $customer->Gender = $request->gender;
        $customer->Address = $request->address;
        $customer->Country = $request->country;
        $customer->State = $request->state;
        $customer->DOB = $request->dob;
        $customer->Password = Hash::make($request['password']);
        $res = $customer->save();
        if ($res) {
            return back()->with('success', 'Registered Successfully');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
        return redirect('register/view');
    }
    public function view()
    {
        return view('signin');
    }

    public function signinprocess(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12',


        ]);
        $customer = Customer::where('email', '=', $request->email)->first();
        if ($customer) {
            if (Hash::check($request->password, $customer->Password)) {
                $request->session()->put('loginId', $customer->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Wrong Password');
            }
        } else {
            return back()->with('fail', 'Email is not registered yet');
        }
    }
    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = Customer::where('id', '=', Session::get('loginId'))->first();
            return view('dashboard', compact('data'));
        }
        return redirect('signin')->with('fail', 'You need to login first');
    }
    public function makecomplaint()
    {
        return view('MakeComplaint');
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('signin');
        }
    }
    public function createcomplaint(Request $request)
    {
        $request->validate([
           

            'category' => 'required',
            'subcategory' => 'required',
            'complainttype' => 'required',
            'complaintdetails' => 'required',

        ]);
        $complaints = new complaints;
        $complaints->name=$request->name;
        $complaints->category = $request->category;
        $complaints->subcategory = $request->subcategory;
        $complaints->complainttype = $request->complainttype;
        $complaints->complaintdetails = $request->complaintdetails;
        $complaints->status = 'In Progress';

        $complaints->user_id = Session::get('loginId');

        $res = $complaints->save();
        if ($res) {
            return back()->with('success', 'You have lodged the complaint successfully');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }
    public function complaints_show()
    {
        $user_id = Session::get('loginId');
        DB::statement(DB::raw("SET @loginId = '$user_id'"));
        $data = DB::select('SELECT * FROM complaints where user_id = @loginId');


        return view('complaints', ['data' => $data]);
    }
    public function cancel_complaint($id){
        $data=complaints::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function showprofile()
    { $user_id = Session::get('loginId');
        DB::statement(DB::raw("SET @loginId = '$user_id'"));
        $data = DB::select('SELECT * FROM customers where id=@loginId');


        return view('customerprofile', ['data' => $data]);
        
    }

    public function change_password(){
        
        return view('changepassword');
    }
    public function changePasswordView(Request $request){

        $request->validate([
            'password' => 'required',
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        if(!Hash::check($request->password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        Customer::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }

    public function faq(){
    
        return view('FAQ');
        
    }
    public function aboutus(){
        
        return view('AboutUs'); 
    }

}
