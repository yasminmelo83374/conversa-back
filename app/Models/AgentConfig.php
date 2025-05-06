<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AgentConfig extends Model {
    protected $fillable = ['agent_id','config'];
    protected $casts = ['config'=>'array'];
    public function agent() { return $this->belongsTo(Agent::class); }
}
