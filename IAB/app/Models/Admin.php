<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Admin extends User
{
    use HasFactory;

    public function isAdmin()
    {
        return DB::table('admins')->where('userEmail', $this->userEmail)->exists();
    }
}
