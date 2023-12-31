<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; 
use App\Models\member;
use DB;
use URL;

class CreateMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {       
        $member_list = DB::table('members')->get(); 
        return view('admin.create.list')->with('member_list',$member_list);;
    }

    public function addMember(Request $request)
    {
        $id = $request->id;
        $employee_id = $request->employee_id;
        $name = $request->name;
        $phone = $request->phone;
        $amount = $request->amount;
        $member_point = $request->member_point;

        if ($amount >= 5000) {
            $member_point += 1;
        }
        
        $member = new Member;
        $member->employee_id = $employee_id;
        $member->name = $name;
        $member->phone = $phone;
        $member->amount = $amount;
        $member->member_point = $member_point;
        
        $member->created_by = auth()->user()->id;
        $member->updated_by = auth()->user()->id;
        $member->save();
        
        $member_list = DB::table('members')->get(); 
        return redirect('/admin/create')->with('success','Member added successfully.');
    }
    

}
