<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('messages', function(Blueprint $table){
            $table->id();
            $table->foreignId('conversation_id')->constrained()->cascadeOnDelete();
            $table->enum('sender', ['user','agent']);
            $table->text('content');
            $table->timestamps();
        });
    }
    public function down() { Schema::dropIfExists('messages'); }
};
