<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $totalProjects = DB::table('projects')->count();
        $lastCreation = DB::table('projects')->latest()->first();
        $lastEdit = DB::table('projects')->where('updated_at', Project::max('updated_at'))->first();
        $totalRevenues = DB::table('projects')->sum('revenues');
        $types = Type::all();
        return view('admin.dashboard', compact('totalProjects', 'lastCreation', 'lastEdit', 'totalRevenues', 'types'));
    }
}
