<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RacingTeam;
use App\Models\TeamMember;
use App\Models\MemberType;
use DB;

class TeamController extends Controller
{
    public function create()
    {
        $memberTypes = MemberType::all();
        $membersByType = [];
    
        foreach ($memberTypes as $type) {
            // Fetch team members for each type who do not belong to a team
            // Assuming 'racing_team_id' is null when they don't belong to any team
            $membersByType[($type->id)-1] = TeamMember::where('member_type_id', $type->id)
                                                   ->whereNull('racing_team_id')
                                                   ->get();
        }
    
        return view('team.create', [
            'memberTypes' => $memberTypes,
            'membersByType' => $membersByType
        ]);
    }

    public function store(Request $request)
    {
        $memberTypes = MemberType::all();
        
        // Start by validating the request data
        $rules = ['team_name' => 'required|string|max:255'];
        foreach ($memberTypes as $type) {
            if ($type->minSelections == 0) {
                $rules['roles.' . $type->id] = 'array|max:' . $type->maxSelections;
            }
            else {
            $rules['roles.' . $type->id] = 'required|array|min:' . $type->minSelections . '|max:' . $type->maxSelections;
            }
        }
        $validatedData = $request->validate($rules);
    
        
        DB::transaction(function () use ($validatedData) {
            
            $team = RacingTeam::create(['name' => $validatedData['team_name']]);
    
            
            foreach ($validatedData['roles'] as $typeId => $memberIds) {
                foreach ($memberIds as $memberId) {
                    
                    $member = TeamMember::where('id', $memberId)
                                        ->whereNull('racing_team_id')
                                        ->firstOrFail();
                    
                    
                    $team->teamMembers()->attach($memberId);
    
                    
                    $member->racing_team_id = $team->id;
                    $member->save();
                }
            }
        });
    
        
        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }
    
   
    public function index()
    {
        $teams = RacingTeam::with('teamMembers.memberType')->get();
        return view('team.index', compact('teams'));
    }
}