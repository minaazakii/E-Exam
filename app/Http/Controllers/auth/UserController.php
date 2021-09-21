<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //********************** Student  **********************/
    public function regStudentIndex()
    {
        return view('auth.signup');
    }
    public function regStudent(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email|required',
            'password'=>'required',
            'level'=>'required',
            'faculty'=>'required'
        ]);
        $picture = $request->photo;
       $picName = time().'.'.$request->photo->extension();
       $path = public_path('profilePic');
       $picture->move($path,$picName);


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'faculty'=>$request->faculty,
            'level'=>$request->level,
            'profilePic'=>$picName,
            'approval'=>'no',
            'role_id'=>3
        ]);

        return redirect()->route('regStudentIndex')->with('success','Registered Successfully');
    }

    public function login()
    {
        return view('auth.login');
    }


    //***************************************Doctor ************************************************/

    public function regDoctorIndex()
    {
        return view('auth.signupdr');
    }
    public function regDoctor(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email|required',
            'password'=>'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'faculty'=>0,
            'level'=>0,
            'approval'=>'no',
            'role_id'=>2
        ]);

        return redirect()->route('regDoctorIndex')->with('success','Registered Successfully');
    }

    //************************** Check User **********************************/

    public function checkLogin(Request $request)
    {
        $loginInfo = array(
            'email'=>$request->email,
            'password'=>$request->password
        );

        if(!Auth::attempt($loginInfo))
        {
            return redirect()->route('loginIndex')->with('error','Wrong Email or Password');

        }
        else if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'approval' => 'no']))
        {
            return redirect()->route('approval');
        }

        return redirect()->route('profile');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginIndex');
    }

    //***********************Profile **************************************/

    public function Profile()
    {
        return view('xtreme-html.ltr.profile');
    }

    public function viewTeachers()
    {
        $teachers = User::where('role_id',2)->get();
        return view('xtreme-html.ltr.teacherlist',[
            'teachers'=>$teachers
        ]);
    }

    public function viewUnapproved()
    {
        $users = User::where('approval','no')->get();
        return view('xtreme-html.ltr.approveusers',[
            'users'=>$users
        ]);
    }

    public function approveUser($id)
    {
        $user = User::find($id);
        $user->approval = 'yes';
        $user->save();
        return redirect()->route('viewUnapproved');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('viewUnapproved');
    }
}
