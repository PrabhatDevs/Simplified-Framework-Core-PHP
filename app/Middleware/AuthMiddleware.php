<?php

namespace App\Middleware;

class AuthMiddleware
{
    public function handle()
    {
       // change this according to your login session management.
        if (!isset($_SESSION['is_login'])) {
            header('Location:'.base_url('login'));
            exit;
        }
    }
}
