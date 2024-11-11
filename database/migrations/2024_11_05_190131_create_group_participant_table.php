<?php

use Faker\Guesser\Name;
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
    Schema::create('group_participants', function (Blueprint $table) {
      $table->id();
      $table->string('team');
      $table->string('information');
      $table->string('leader_name');
      $table->string('leader_grade');
      $table->string('leader_whatsapp');
      $table->string('leader_tweet');
      $table->string('member_name');
      $table->string('member_grade');
      $table->string('member_whatsapp');
      $table->string('member_tweet');
      $table->string('school_name');
      $table->string('school_address');
      $table->string('region');
      $table->string('file');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('group_participants');
  }
};
