<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() { return ['name'=>'sometimes|required|string|max:255','description'=>'nullable|string','active'=>'boolean']; }
}
