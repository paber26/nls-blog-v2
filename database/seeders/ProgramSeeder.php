<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path('seeders/data/programs.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {
            $mapped = [];
            foreach ($item as $k => $v) {
                $mapped[\Illuminate\Support\Str::snake($k)] = $v;
            }
            \App\Models\Program::create($mapped);
        }
    }
}
