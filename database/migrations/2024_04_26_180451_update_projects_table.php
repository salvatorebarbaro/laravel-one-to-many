<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('title',40);
            //abbiamo associato a description e img il nullable per non doverli inseirre per forza e img l'ho inseito per potermi salvare il percorso
            $table->mediumText('description')->nullable();
            $table->string('img_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['title','description','img_path']);
        });
    }
};
