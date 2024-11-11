<?php

namespace App\Http\Controllers;

use App\Models\GroupParticipant;
use App\Models\Participant;
use Illuminate\Http\Request;

class GroupParticipantController extends Controller
{
  public function registerBeregu(Request $request)
  {
    $request->validate([
      'team' => 'required|string',
      'information' => 'required|string',
      'leader_name' => 'required|string',
      'leader_grade' => 'required|string',
      'leader_whatsapp' => 'required|string',
      'leader_tweet' => 'required|string',
      'member_name' => 'required|string',
      'member_grade' => 'required|string',
      'member_whatsapp' => 'required|string',
      'member_tweet' => 'required|string',
      'school_name' => 'required|string',
      'school_address' => 'required|string',
      'region' => 'required|string',
      'file' => 'required|image|max:2048'
    ]);

    $filePath = $request->file('file')->store('uploads/private');

    GroupParticipant::create([
      'team' => $request->team,
      'information' => $request->information,
      'leader_name' => $request->leader_name,
      'leader_grade' => $request->leader_grade,
      'leader_whatsapp' => $request->leader_whatsapp,
      'leader_tweet' => $request->leader_tweet,
      'member_name' => $request->member_name,
      'member_grade' => $request->member_grade,
      'member_whatsapp' => $request->member_whatsapp,
      'member_tweet' => $request->member_tweet,
      'school_name' => $request->school_name,
      'school_address' => $request->school_address,
      'region' => $request->region,
      'file' => $filePath,
    ]);
    return redirect()->back()->with('success', 'Beregu registration submitted successfully!');
  }
}
