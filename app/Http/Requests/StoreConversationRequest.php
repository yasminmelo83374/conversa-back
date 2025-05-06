<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreConversationRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() { return ['agent_id'=>'required|exists:agents,id','subject'=>'nullable|string']; }
}
