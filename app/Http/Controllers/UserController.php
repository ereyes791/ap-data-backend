<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Video;
use App\Models\Paper;
use App\Models\KeyTerms;
use App\Models\Algorithm;
use App\Models\Content;
use App\Models\Topic;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        //
        $subjects = Subject::first();

        $topics = Topic::all();
        $fullinfo_Topics = [];
        foreach ($topics as $value) {
            $video_topics = [];
            $videos_full =  Video::all();
            // Video info
            foreach($videos_full as $video){
                if($video->topic_id == $value->id){
                    $content_aux = Content::all();
                    foreach($content_aux as $content){
                        if($content->id == $video->content_id){
                           $content_video = $content;
                        }
                    }
                    $key_terms = [];
                    $all_terms = KeyTerms::all();
                    foreach($all_terms as $term){
                        if($term->video_id == $video->id){
                            array_push($key_terms,$term);
                        }
                    }
                    $info = [
                        'YT_video_url' => $video->YT_video_URL,
                        'id'=> $video->id,
                        'name' => $content_video->name,
                        'description' => $content_video->description,
                        'link_text' => $content_video->link_texti,
                        'key_terns' => $key_terms,
                    ];
                    array_push($video_topics,$info);
                }
            }
            //Paper
            $paper_topics =[];
            $all_papers = Paper::all();
            foreach($all_papers as $paper){
                if($paper->topic_id == $value->id){
                    $content_all = Content::all();
                    foreach($content_all as $content){
                        if($content->id == $paper->content_id){
                            $content_paper = $content;
                        }
                    }
                    $paper_info =[
                        'id' => $paper->id,
                        'PDF_URL' => $paper->PDF_URL,
                        'name' => $content_paper->name,
                        'description' => $content_paper->description,
                        'link_text' => $content_paper->link_text
                    ];
                    array_push($paper_topics,$paper_info);
                }
            }
            // Algoritmos
            $algorithms_topics=[];
            $all_algorithms = Algorithm::all();
            foreach($all_algorithms as $algo){
                if($algo->topic_id == $value->id){
                    $content_all = Content::all();
                    foreach($content_all as $content){
                        if($content->id == $algo->content_id){
                            $content_algo = $content;
                        }
                    }
                    $algo_info = [
                        'id' => $algo->id,
                        'title' => $algo->title,
                        'problem' => $algo->problem,
                        'problem_examples' => $algo->problem_examples,
                        'initial_code' => $algo->initial_code,
                        'problem_solved' => $algo->problem_solved,
                        'tests_input' => $algo->tests_input,
                        'tests_results_output' => $algo->tests_results_output,
                        'orderMandatory' => $algo->orderMandatory,
                        'name' => $content_algo->name,
                        'description' => $content_algo->description,
                        'link_text' => $content_algo-> link_text
                    ];
                    array_push($algorithms_topics,$algo_info);
                }
            }
            $val = [
                    'id' => $value->id,
                    'title'=> $value->title,
                    'week'=> $value->week,
                    'description' => $value->description,
                    'tag' => $value->tag,
                    'content' => ['videoHours'=> $value->video_hours,
                                'paper_ondemand'=> $value->paper_ondemand,
                                'Algorithm' => $value->algorithms],
                    'videos' => $video_topics,
                    'papers' => $paper_topics,
                    'algorithms' => $algorithms_topics,
            ];
            array_push($fullinfo_Topics,$val);
        }
        return response()->json([
          'subject' => $subjects->name,
          'description' => $subjects->description,
          'topics' => $fullinfo_Topics
    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
