<?php

namespace Database\Seeders;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class AlgorithmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $uuid_algo1 =  Uuid::generate()->string;
        $algo_aproach = "Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
            You may assume that each input would have exactly one solution, and you may not use the same element twice.
            you can return the answer in any order.";
        $algo_example = "[
                Input: nums = [2,7,11,15], target = 9
                Output: [0,1],
                Input: nums = [3,2,4], target = 6
                Output: [1,2],Input: nums = [3,3], target = 6
                Output: [0,1]
            ]";
        $algo_solved_explained = "Approach 2: Two-pass Hash Table
            To improve our run time complexity, we need a more efficient way to check if the complement exists in the array. If the complement exists, we need to look up its index. What is the best way to maintain a mapping of each element in the array to its index? A hash table.";
        $algo_problem_solved = "[results]";
        $uuid_pdf1 =  Uuid::generate()->string;
        $uuid_content1 =  Uuid::generate()->string;
        $algo_name = "Estructuras de control y programación";
        $algo_desc = "Este articulo nos ejemplifica como las estructuras de control funcionan en la programacion";
        $algo_linktext = "Estructuras de control";
        DB::table('contents')->insert([
            'id' => $uuid_content1,
            'name' => $algo_name,
            'description' => $algo_desc,
            'link_text' => $algo_linktext
        ]);
        DB::table('algorithms')->insert([
            'id' => $uuid_algo1,
            'problem_aproach' => $algo_aproach,
            'problem_example' => $algo_example,
            'problem_solved_explained' => $algo_solved_explained,
            'problem_solved' => $algo_problem_solved,
            'content_id' => $uuid_content1
        ]);
    }
}
