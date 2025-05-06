<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreTeamMemberRequest;
use App\Http\Requests\UpdateTeamMemberRequest;
use App\Models\TeamMember;

class TeamController extends Controller {
    public function index() { return response()->json(TeamMember::all()); }
    public function store(StoreTeamMemberRequest $req) { return response()->json(TeamMember::create($req->validated()), 201); }
    public function update(UpdateTeamMemberRequest $req, TeamMember $member) { $member->update($req->validated()); return response()->json($member); }
    public function destroy(TeamMember $member) { $member->delete(); return response()->json(['message'=>'Membro removido']); }
}
