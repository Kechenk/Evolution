<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoloParticipant extends Model
{
   use HasFactory;

   protected $fillable = [
      'team',
      'information',
      'leader_name',
      'leader_grade',
      'school_name',
      'school_address',
      'whatsapp',
      'tweet',
      'region',
   ];
}
