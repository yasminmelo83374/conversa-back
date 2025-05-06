<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreAgentConfigRequest;
use App\Models\AgentConfig;

class AgentConfigController extends Controller {
    public function show($agentId) {
        $config = AgentConfig::where('agent_id', $agentId)->first();
        return response()->json($config);
    }
    public function store(StoreAgentConfigRequest $req, $agentId) {
        $config = AgentConfig::updateOrCreate(['agent_id' => $agentId], ['config' => $req->validated()['config']]);
        return response()->json($config, 201);
    }
}
