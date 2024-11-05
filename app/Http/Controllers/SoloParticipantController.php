<?php

namespace App\Http\Controllers;

use App\Models\SoloParticipant;
use Illuminate\Http\Request;

class SoloParticipantController extends Controller
{
  public function registerTunggal(Request $request)
  {
    $request->validate([
      'team' => 'required|string',
      'information' => 'required|string',
      'leader_name' => 'required|string',
      'leader_grade' => 'required|string',
      'school_name' => 'required|string',
      'school_address' => 'required|string',
      'whatsapp' => 'required|string',
      'tweet' => 'required|string',
      'region' => 'required|string',
    ]);

    SoloParticipant::create([
        'team' => $request->team,
        'information' => $request->information,
        'leader_name' => $request->leader_name,
        'leader_grade' => $request->leader_grade,
        'school_name' => $request->school_name,
        'school_address' => $request->school_address,
        'whatsapp' => $request->whatsapp,
        'tweet' => $request->tweet,
        'region' => $request->region,
    ]);
    return redirect()->back()->with('success', 'Individual registration submitted successfully!');
  }
}
