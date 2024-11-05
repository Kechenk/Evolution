<?php

namespace App\Http\Controllers;

use App\Models\GroupParticipant;
use App\Models\Participant;
use Illuminate\Http\Request;

class GroupParticipantController extends Controller
{
  public function registerTunggal(Request $request)
  {
    $request->validate([
      'team' => 'required|string',
      'information' => 'required|string',
      'leader_name' => 'required|string',
      'leader_grade' => 'required|string',
      'leader_whatsapp' => 'required|string',
      'link_tweet1' => 'required|string',
      'member_name' => 'required|string',
      'member_grade' => 'required|string',
      'member_whatsapp' => 'required|string',
      'link_tweet2' => 'required|string',
      'school_name' => 'required|string',
      'school_address' => 'required|string',
      'region' => 'required|string',
    ]);

    GroupParticipant::create([
      'team' => $request->team,
      'information' => $request->information,
      'leader_name' => $request->leader_name,
      'leader_grade' => $request->leader_grade,
      'leader_whatsapp' => $request->leader_whatsapp,
      'link_tweet1' => $request->link_tweet1,
      'member_name' => $request->member_name,
      'member_grade' => $request->member_grade,
      'member_whatsapp' => $request->member_whatsapp,
      'link_tweet2' => $request->link_tweet2,
      'school_name' => $request->school_name,
      'school_address' => $request->school_address,
      'region' => $request->region,
    ]);
    return redirect()->back()->with('success', 'Beregu registration submitted successfully!');
  }
}
