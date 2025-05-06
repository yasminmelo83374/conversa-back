<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() { return ['key'=>'required|string','value'=>'required']; }
}
