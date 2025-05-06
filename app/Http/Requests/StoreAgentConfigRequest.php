<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreAgentConfigRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() { return ['config'=>'required|array']; }
}
