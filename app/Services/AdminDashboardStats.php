<?php

namespace App\Services;

use App\Models\User;

class AdminDashboardStats
{
    public function getTotalAdmins()
    {
        return User::where('role', 'admin')->count();
    }

    public function getTotalUsers()
    {
        return User::where('role', 'user')->count();
    }

    public function getActiveUsers()
    {
        return User::where('role', 'user')
            ->where('active', true)
            ->count();
    }

    public function getBannedUsers()
    {
        return User::where('role', 'user')
            ->where('active', false)
            ->count();
    }
}
