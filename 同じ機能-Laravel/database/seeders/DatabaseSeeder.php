<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Bool_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('社員')->insert([
            '社員番号' => Str::random(5),
            '氏名' => Str::random(10),
            '部署' => Str::random(10),
            '性別' => (bool)random_int(0, 1)
        ]);
        DB::table('社員')->insert([
            '社員番号' => Str::random(5),
            '氏名' => Str::random(10),
            '部署' => Str::random(10),
            '性別' => (bool)random_int(0, 1)
        ]);
        DB::table('社員')->insert([
            '社員番号' => Str::random(5),
            '氏名' => Str::random(10),
            '部署' => Str::random(10),
            '性別' => (bool)random_int(0, 1)
        ]);
        DB::table('社員')->insert([
            '社員番号' => Str::random(5),
            '氏名' => Str::random(10),
            '部署' => Str::random(10),
            '性別' => (bool)random_int(0, 1)
        ]);
        DB::table('社員')->insert([
            '社員番号' => Str::random(5),
            '氏名' => Str::random(10),
            '部署' => Str::random(10),
            '性別' => (bool)random_int(0, 1)
        ]);
    }
}
