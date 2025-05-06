<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamMemberRequest extends FormRequest {
    public function authorize() { return true; }
    public function rules() { return ['name'=>'sometimes|string','email'=>'sometimes|email|unique:team_members,email,' . $this->route('member')['id'],'role'=>'sometimes|string']; }
}
