<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController, AgentController, AgentConfigController,
    ConversationController, MessageController, AnalyticsController,
    TeamController, SettingController, ManagerControlController
};

Route::post('login', [AuthController::class,'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout',[AuthController::class,'logout']);
    Route::apiResource('agents',AgentController::class);
    Route::get('agents/{id}/config',[AgentConfigController::class,'show']);
    Route::post('agents/{id}/config',[AgentConfigController::class,'store']);
    Route::get('conversations',[ConversationController::class,'index']);
    Route::post('conversations',[ConversationController::class,'store']);
    Route::get('conversations/{conversation}',[ConversationController::class,'show']);
    Route::post('conversations/{conversation}/messages',[MessageController::class,'store']);
    Route::get('analytics',[AnalyticsController::class,'index']);
    Route::apiResource('team',TeamController::class)->parameters(['team'=>'member']);
    Route::get('settings',[SettingController::class,'index']);
    Route::put('settings',[SettingController::class,'update']);
    Route::get('manager-control/{action}',[ManagerControlController::class,'handle']);
});
