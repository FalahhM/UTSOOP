<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PengeluaranModel;
use App\Models\User;

class UpdatePengeluaranUserIdSeeder extends Seeder
{
    public function run()
    {
        $defaultUserId = User::first()->id;
        PengeluaranModel::whereNull('user_id')->update(['user_id' => $defaultUserId]);
    }
}

