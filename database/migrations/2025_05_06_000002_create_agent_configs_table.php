<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('agent_configs', function(Blueprint $table){
            $table->id();
            $table->foreignId('agent_id')->constrained()->cascadeOnDelete();
            $table->json('config');
            $table->timestamps();
        });
    }
    public function down() { Schema::dropIfExists('agent_configs'); }
};
