<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Json_Todos;
class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $json = file_get_contents('https://jsonplaceholder.typicode.com/todos');

        $json_data = json_decode($json, true);

        foreach ($json_data as $key => $value) {
            Json_Todos::create([
                'userid' => $value['userId'],
                'title' => $value['title'],
                'completed' => $value['completed'],
            ]);
        }
    }
}
