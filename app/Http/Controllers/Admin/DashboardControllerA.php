<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AdminDashboardStats;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardControllerA extends Controller
{
    public function __construct(private AdminDashboardStats $stats)
    {
        //
    }

    public function index(): View
    {
        return view('admin.index', [
            'totalAdmins' => $this->stats->getTotalAdmins(),
            'totalUsers' => $this->stats->getTotalUsers(),
            'activeUsers' => $this->stats->getActiveUsers(),
            'bannedUsers' => $this->stats->getBannedUsers(),
        ]);
    }

    public function users(): View
    {
        $users = User::where('role', 'user')->latest()->get();

        return view('admin.users.index', compact('users'));
    }
}
