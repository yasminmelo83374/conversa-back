<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller {
    public function index() {
        $stats = [
            'total_agents' => DB::table('agents')->count(),
            'total_conversations' => DB::table('conversations')->count(),
            'total_messages' => DB::table('messages')->count(),
        ];
        return response()->json($stats);
    }
}
