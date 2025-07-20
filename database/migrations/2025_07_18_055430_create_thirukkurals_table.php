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
        Schema::create('thirukkurals', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->integer('Adhigaram_ID');
            $table->text('Section');
            $table->text('Paal');
            $table->text('Iyal');
            $table->text('Adhigaram');
            $table->text('Kural');
            $table->text('Transliteration');
            $table->text('Vilakam');
            $table->text('Couplet');
            $table->text('Parimezhalagar_Urai');
            $table->text('M_Varadharajanar');
            $table->text('Solomon_Pappaiya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thirukkurals');
    }
};
