<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;

class UserSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 */
	public function run(): void{
		User::create([
			'name' => 'superadmin',
			'username' => 'superadmin',
			'level_user' => 'superadmin',
			'password' => bcrypt('superadmin'),
			'show' => Crypt::encryptString('superadmin'),
		]);
		User::create([
			'name' => 'admin',
			'username' => 'admin',
			'level_user' => 'admin',
			'password' => bcrypt('admin'),
			'show' => Crypt::encryptString('admin'),
		]);
		User::create([
			'name' => 'guru',
			'username' => 'guru',
			'level_user' => 'guru',
			'jenis_nakes' => 'guru',
			'password' => bcrypt('guru'),
			'show' => Crypt::encryptString('guru'),
		]);
	}
}
