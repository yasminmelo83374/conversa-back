<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model {
    protected $fillable = ['user_id','name','description','active'];
    public function config() { return $this->hasOne(AgentConfig::class); }
}
