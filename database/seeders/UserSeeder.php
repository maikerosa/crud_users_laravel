<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Json_Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('https://jsonplaceholder.typicode.com/users');
        $json_data = json_decode($json, true);
        foreach ($json_data as $key => $value) {
            Json_Users::create([
                'name' => $value['name'],
                'email' => $value['email'],
                'username' => $value['username'],
            ]);
        }
    }
}
