<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index(): void
    {
        $totalUsers = User::query()->count();

        $this->render("index", ["total_users" => $totalUsers]);
    }
}
