<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model {
    protected $fillable = ['user_id','agent_id','subject'];
    public function messages() { return $this->hasMany(Message::class); }
}
