<?php
namespace App\Http\Controllers;

class ManagerControlController extends Controller {
    public function handle($action) {
        // implementar lógica específica
        return response()->json(['message'=>"Action {$action} executada"]);
    }
}
