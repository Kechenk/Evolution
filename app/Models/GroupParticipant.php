<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
      'team',
      'information',
      'leader_name',
      'leader_grade',
      'leader_whatsapp',
      'leader_tweet',
      'member_name',
      'member_grade',
      'member_whatsapp',
      'member_tweet',
      'school_name',
      'school_address',
      'region',
      'file',
    ];
}
