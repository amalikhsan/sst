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
        Schema::create('inter_view_timpsikologs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('kat1_var1');
            $table->string('kat1_var2');
            $table->string('kat1_var3');
            $table->string('kat1_var4');
            $table->string('kat1_var5');
            $table->string('kat1_var6');
            $table->string('kat2_var7');
            $table->string('kat2_var8');
            $table->string('kat2_var9');
            $table->string('kat2_var10');
            $table->string('kat3_var11');
            $table->string('kat3_var12');
            $table->string('kat3_var13');
            $table->string('kat3_var14');
            $table->string('kat3_var15');
            $table->string('kat3_var16');
            $table->string('kat3_var17');
            $table->string('kat4_var18');
            $table->string('kat4_var19');
            $table->string('kat4_var20');
            $table->string('rata_rata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inter_view_timpsikologs');
    }
};
