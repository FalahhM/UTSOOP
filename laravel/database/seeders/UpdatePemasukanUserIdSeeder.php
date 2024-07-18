<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PemasukanModel;
use App\Models\User;

class UpdatePemasukanUserIdSeeder extends Seeder
{
    public function run()
    {
        $defaultUserId = User::first()->id;
        PemasukanModel::whereNull('user_id')->update(['user_id' => $defaultUserId]);
    }
}

