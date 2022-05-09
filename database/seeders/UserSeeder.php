<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate([
            'id'    => 1,
        ], [
            'nama' => 'Super Admin',
            'alamat' => 'Jalan Indah',
            'nohp' => '081112334443',
            'pekerjaan' => 'Super Admin',
            'email' => 'admin@gmail.com',
            // 'password' => 'bcrypt('admin123')',
            'password' => bcrypt('admin123'),
            'role' => 0
        ]);
        // $user->assignRole('0');

        $user = User::updateOrCreate([
            'id'    => 2,
        ], [
            'nama' => 'Mitra',
            'alamat' => 'Jalan Bali',
            'nohp' => '081112334443',
            'pekerjaan' => 'Mitra',
            'email' => 'mitra@gmail.com',
            // 'password' => 'bcrypt('mitra123')',
            'password' => bcrypt('mitra123'),
            'role' => 1
        ]);
        // $user->assignRole('1');

        $user = User::updateOrCreate([
            'id'    => 3,
        ], [
            'nama' => 'Pelanggan',
            'alamat' => 'Jalan Jawa',
            'nohp' => '081112334443',
            'pekerjaan' => 'Karyawan',
            'email' => 'pelanggan@gmail.com',
            // 'password' => 'bcrypt('pelanggan123')',
            'password' => bcrypt('pelanggan123'),
            'role' => 2
        ]);
        // $user->assignRole('2');
    }
}
