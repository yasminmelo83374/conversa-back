<?php
namespace App\Http\Controllers;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;

class SettingController extends Controller {
    public function index() { return response()->json(Setting::all()); }
    public function update(UpdateSettingRequest $req) {
        $s = Setting::where('key', $req->key)->firstOrFail();
        $s->update(['value' => $req->value]);
        return response()->json($s);
    }
}
