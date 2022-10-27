<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInfoRequest;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use PhpParser\Node\Stmt\TryCatch;

class UserInfoController extends Controller
{

    public function index()
    {
        return view('user.user_home');
    }
     public function myCourse()
    {
         return view('user.my_course');
    }
     public function myProfile()
    {
        return view('user.my_profile');
    }
     public function myDevcoin()
    {
        return view('user.my_devcoin');
    }
     public function ProfileInfo()
    {
        return view('user.profileInfo');
    }

    public function store(UserInfoRequest $request,$id)
    {
        try {
            
        $image_path = null;

        if($request->hasFile('ImageFile'))
        {
            $image_path = $request->file('ImageFile')->store('userImage','public');
      
        }

        $user = User::find($id);
         if ($image_path == null) {
            $image_path = $user->image_path;
        }

        // $user->user_id = $id;
        if ($request->btn != null) {
            $user->instructor = true;
            // if ($image_path == null) {
            //     $image_path = $user->image_path; 
            // }
        }
        $user->name = $request->Name;
        $user->image_path = $image_path;
        $user->mbl_country =$request->MobileCountry;
        $user->mbl_number = $request->Mobile;
        $user->biography = $request->Biography;
        $user->gender = $request->Gender;
        $user->company = $request->CompanyName;
        $user->designation = $request->Designation;
        $user->currently = $request->IsStudying.",".$request->IsWorking.",".$request->IsLookingForJob;
        $user->university = $request->EducationalOrg;
        $user->inerested_tpc = $request->TechSkill;
        $user->linkdin_link = $request->LinkdinLink;
        $user->timezone = $request->TimeZone;
        $user->country = $request->Country;
        $user->ref_by = $request->ReferralCode;
        $user->save();


        return redirect('/home');
      
        } catch (\Throwable $th) {
            return "Go back to Previous Page, Please";
        }

        
    }

    public function ToChangePass()
    {
        return view('user.password_change');
    }

    public function changePass(Request $request, $id)
    {
         $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit_profile',compact('user'));
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
        $image_path = null;

        if($request->hasFile('ImageFile'))
        {
            $image_path = $request->file('ImageFile')->store('userImage','public');
      
        }

        
      
        $user = User::find($id);

        // $user->user_id = $id;
        // if ($request->inst != null) {
        //     $user->instructor = true;
        // }

        if ($image_path == null) {
            $image_path = $user->image_path;
        }
        $user->name = $request->Name;
        $user->image_path = $image_path;
        $user->mbl_country =$request->MobileCountry;
        $user->mbl_number = $request->Mobile;
        $user->biography = $request->Biography;
        $user->gender = $request->Gender;
        $user->company = $request->CompanyName;
        $user->designation = $request->Designation;
        $user->currently = $request->IsStudying.",".$request->IsWorking.",".$request->IsLookingForJob;
        $user->university = $request->EducationalOrg;
        $user->inerested_tpc = $request->TechSkill;
        $user->linkdin_link = $request->LinkdinLink;
        $user->timezone = $request->TimeZone;
        $user->country = $request->Country;
        $user->save();
        return redirect('/myprofile');;
    }
}
