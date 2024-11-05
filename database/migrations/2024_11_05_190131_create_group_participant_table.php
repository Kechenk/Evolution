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
    Schema::create('group_participant', function (Blueprint $table) {
      $table->id();
      $table->string('team');
      $table->string('information');
      $table->string('leader_name');
      $table->string('leader_grade');
      $table->string('leader_whatsapp');
      $table->string('link_tweet1');
      $table->string('member_name');
      $table->string('member_grade');
      $table->string('member_whatsapp');
      $table->string('link_tweet2');
      $table->string('school_name');
      $table->string('school_address');
      $table->string('region');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('group_participant');
  }
};
