<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Video;
use App\Models\Algorithm;
use App\Models\Paper;

use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $uuid_topic1 = Uuid::generate()->string;
        $topic1_name = 'Introducción a la Programación';
        $topic1_desc = 'Si tuviéramos que resumir el propósito de la programación en una frase, ésta debería ser:que el computador haga el trabajo por nosotros.Los computadores son buenos para hacer tareas rutinarias. Idealmente, cualquier problema tedioso y repetitivo debería ser resuelto por un computador, y los seres humanos sólo deberíamos encargarnos de los problemas realmente interesantes: los que requieren creatividad, pensamiento crítico y subjetividad.';
        $topic1_week = 'Semana 1';
        $topic1_tag = 'intro-programming';
        $topic1_video = 40;
        $topic1_paper =2;
        $topic1_algo = 2;

        $uuid_topic2 = Uuid::generate()->string;
        $topic2_name = 'Estructuras de control';
        $topic2_desc = 'Las estructuras de control, son instrucciones que permiten romper la secuencialidad de la ejecución de un programa; esto significa que una estructura de control permite que se realicen unas instrucciones y omitir otras, de acuerdo a la evaluación de una condición.';
        $topic2_week = 'Semana 2';
        $topic2_tag = 'control-struc';
        $topic2_video = 30;
        $topic2_paper =3;
        $topic2_algo = 4;
        DB::table('topics')->insert([
            [
                'id' => $uuid_topic1,
                'name' => $topic1_name,
                'description' => $topic1_desc,
                'week' => $topic1_week,
                'tag' => $topic1_tag,
                'video_hours' => $topic1_video,
                'paper_ondemand' => $topic1_paper,
                'algorithms' => $topic1_algo,
            ],[
                'id' => $uuid_topic2,
                'name' => $topic2_name,
                'description' => $topic2_desc,
                'week' => $topic2_week,
                'tag' => $topic2_tag,
                'video_hours' => $topic2_video,
                'paper_ondemand' => $topic2_paper,
                'algorithms' => $topic2_algo,
            ]
        ]);
        $videos = Video::all();
        $papers = Paper::all();
        $algo = Algorithm::all();
        foreach ($videos as &$value) {
            $value->topic_id = $uuid_topic1;;
            $value->save();
        }
        foreach ($papers as &$value) {
            $value->topic_id = $uuid_topic1;;
            $value->save();
        }

        foreach ($algo as &$value) {
            $value->topic_id = $uuid_topic1;;
            $value->save();
        }
    }
}
