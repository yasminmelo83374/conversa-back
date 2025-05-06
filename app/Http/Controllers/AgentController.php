<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\Agent;

class AgentController extends Controller {
    public function index() { return response()->json(Agent::all()); }
    public function store(StoreAgentRequest $req) {
        $agent = Agent::create(array_merge($req->validated(), ['user_id' => auth()->id()]));
        return response()->json($agent, 201);
    }
    public function show(Agent $agent) { return response()->json($agent); }
    public function update(UpdateAgentRequest $req, Agent $agent) {
        $agent->update($req->validated());
        return response()->json($agent);
    }
    public function destroy(Agent $agent) {
        $agent->delete();
        return response()->json(['message'=>'Agent removido']);
    }
}
