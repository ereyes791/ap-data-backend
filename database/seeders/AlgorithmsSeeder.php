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
        //newseeds
        $uuid_algo1 =  Uuid::generate()->string; 
        $algo1_title = "Two Number Sum";
        $algo1_problem = "Write a function that takes in a non-empty array of distinct integers and an \n
            integer representing a target sum. If any two numbers in the input array sum \n
            up to the target sum, the function should return them in an array, in any \n
            order. If no two numbers sum up to the target sum, the function should return \n
            an empty array. \n
            \n
            Note that the target sum has to be obtained by summing two different integers \n
            in the array; you can't add a single integer to itself in order to obtain the \n
            target sum.\n
            \n
            You can assume that there will be at most one pair of numbers summing up to \n
            the target sum.\n
      ";
        $algo1_problem_examples = "Sample Input \n
            Array = [3, 5, -4, 8, 11, 1, -1, 6] \n
            targetSum = 10 \n
            Sample Output \n
            [-1, 11] \n";
        $algo1_initial_code = "def twoNumberSum (array, targetSum): \n  # Write your code here.\n  Pass \n";
        $algo1_problem_solved = "def  twoNumberSum (array,targetSum): \n
         num= {} \n
         for num in array: \n
          potentialMatch = targetSum - num \n
          if potentialMatch in nums: \n
           return [potentialMatch,num] \n
          else:  \n
         Nums[num] = True \n
         Return [] \n";
        // json
        $algo1_tests_inputs = 
            array(
                array('array' => [3, 5, -4, 8, 11, 1, -1, 6], 'targetSum' => 10),
                array('array' => [4, 6], 'targetSum' => 10),
                array('array' => [4, 6, 1], 'targetSum' => 10),
                array('array' => [4, 6, 1, -3], 'targetSum' => 3),
            );
        $algo1_tests_results_input = array(
            [11, -1],
            [4, 6],
            [4, 1],
            [6, -3]
        );

        $algo1_mandatory_order = false;

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
            'title' => $algo1_title,
            'problem' => $algo1_problem,
            'problem_examples' => $algo1_problem_examples,
            'initial_code' => $algo1_initial_code,
            'problem_solved' => $algo1_problem_solved,
            'tests_input' =>json_encode($algo1_tests_inputs),
            'tests_results_output' => json_encode($algo1_tests_results_input),
            'orderMandatory' => $algo1_mandatory_order,
            'content_id' => $uuid_content1
        ]);
    }
}
