<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menonaktifkan pengecekan foreign key constraints
        Schema::disableForeignKeyConstraints();

        // Menghapus semua data dari tabel roles
        Role::truncate();

        // Mengaktifkan kembali pengecekan foreign key constraints setelah selesai
        Schema::enableForeignKeyConstraints();

        $data = [
            'admin','client'
        ];
        foreach($data as $key => $value){
            Role::insert([
                'name' => $value
            ]);

        }
    }
}
