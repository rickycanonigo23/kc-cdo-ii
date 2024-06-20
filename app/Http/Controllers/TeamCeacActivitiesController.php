<?php

namespace App\Http\Controllers;

use App\Models\TeamCeacActivities;
use Illuminate\Support\Facades\DB;

class TeamCeacActivitiesController extends Controller
{
    public function index()
    {
        $activities = TeamCeacActivities::where('status', 'NOT LIKE', 'completed')
        ->where(DB::raw('DATE(created_at)'), '<>', DB::raw('DATE(NOW())'))
        ->get();
        return view('activities.index', compact('activities'));
    }
}
