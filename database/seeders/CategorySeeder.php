<?php

namespace Database\Seeders;


use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
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
          Category::truncate();
  
          // Mengaktifkan kembali pengecekan foreign key constraints setelah selesai
          Schema::enableForeignKeyConstraints();
  
          $data = [
              'comic','novel','fantasy','fiction','mystery','horror','romance','watersn'
          ];
          foreach($data as $key => $value){
              Category::insert([
                  'name' => $value
              ]);
  
          }
    }
}
