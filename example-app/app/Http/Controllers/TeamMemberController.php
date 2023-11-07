<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\MemberType;

class TeamMemberController extends Controller
{
   
    public function create()
    {
        $memberTypes = MemberType::all();
        return view('member.create', compact('memberTypes'));
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'member_type_id' => 'required|exists:member_types,id',
           
        ]);

        $teamMember = TeamMember::create($validatedData);

        
        return redirect()->route('teammembers.index');
    }

    
    public function index()
    {
        $teamMembers = TeamMember::with('memberType')->get();
        return view('member.index', compact('teamMembers'));
    }

    
}